<?php

namespace App\Http\Controllers\Front\Owner;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use Auth;
use DB;
use Session;

/**
 * This class used for owner venue info related action
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Venue extends Controller {

	public function __construct()
    {
        $this->middleware('auth:web');
    }
    
	/**
     * view owner venue info page
     *
     * @return Response 
     * @author Mostafijur Rahman Rana
     */
    public function index() {

        $data['title'] = 'My Venue Information';

        // get venue info
        $data['info'] = DB::table('v_venue_infos')->where('ve_ow_id', Auth::user()->id)->first();

       if(!empty($data['info'])){

            // get venue img_list
            $data['img_lists'] = DB::table('v_venue_images')->where('ve_id', $data['info']->id)->get();

        }
        // get division list
        $data['divs'] = DB::table('v_divisions')->get();

        if(!empty($data['info']) && isset($data['info']->ve_area)){
            // get default area
            $data['default_area'] = DB::table('v_areas')->select('id', 'ar_name')->where('id', $data['info']->ve_area)->first();
        }
        
        // menu
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'hall_list';
        
        return view('front.owner.my_venue', $data);
        
    }

    
    /**
     * update owner venue information
     *
     * @param  Request  $request
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function update(Request $request) {

        // get venue id
        $ve_id = DB::table('v_venue_infos')->select('id')->where('ve_ow_id', Auth::user()->id)->first();

        // need to validate before live
        
        // logo upload
        if(Input::file('logo')){

            // delete from directory
            $del_image = $request->input('old_logo');
            $base_path = base_path();
            $path = str_replace('venue_booking', 'root/images/venue/logo/' , $base_path);
            $filename = $path . $del_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

            // upload new 
            $image = Input::file('logo');
            $logo_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            //$path = public_path('images/venue/'); // E:\xampp\htdocs\venue\venue_booking
            $base_path = base_path();
            $path = str_replace('venue_booking', 'root/images/venue/logo/' , $base_path);
            $image->move($path, $logo_name);

        }else{

            $logo_name = $request->input('old_logo');
        }

        // other images upload
        if(Input::file('images')){

            // old image delete from db
            DB::table('v_venue_images')->where('ve_id', $ve_id->id)->delete();

            if(!empty($request->input('old_images'))){

                // old image delete from directory
                $old_images = $request->input('old_images');

                foreach($old_images as $old_image){

                    $base_path = base_path();
                    $path = str_replace('venue_booking', 'root/images/venue/' , $base_path);
                    $filename = $path . $old_image;
                    if (file_exists($filename)) {
                        unlink($filename);
                    }

                }
                
            }

            // new image upload and save it to database
            $images = $request->file('images');
            foreach($images as $image){

                $filename  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
                $base_path = base_path();
                $path = str_replace('venue_booking', 'root/images/venue/' , $base_path);
                $image->move($path , $filename);

                // make array
                $data = [
                    've_id' => $ve_id->id,
                    've_image' => $filename
                ];

                DB::table('v_venue_images')->insert($data);

            }

        }

        // make array
        $data = [
            
            've_name' => $request->input('name'),
            've_about' => $request->input('about'),
            've_add' => $request->input('add'),
            've_division' => $request->input('division'),
            've_area' => $request->input('area'),
            've_open' => $request->input('open'),
            've_close' => $request->input('close'),
            've_logo' => $logo_name
        
        ];
        
        // update 
        if(DB::table('v_venue_infos')->where('id', $ve_id->id)->update($data)){

            $msg = "Successfully Added!";
            Session::flash('success', $msg);
            return Redirect::back();
            
        } else {
            
            $msg = "Not Saved!";
            Session::flash('error', $msg);
            return Redirect::back();
            
        }
        
    }


}