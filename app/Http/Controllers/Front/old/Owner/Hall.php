<?php

namespace App\Http\Controllers\Front\Owner;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Back\Common;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Session;

/**
 * This class used for owner hall related action
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Hall extends Controller {

	public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    /**
     * view hall list of this owner
     *
     * @return Response 
     * @author Mostafijur Rahman Rana
     */
    public function index() {

        $data['title'] = 'My Hall List';

        // get hall list
        $data['lists'] = DB::table('v_halls')
            ->join('v_venue_infos', 'v_halls.ve_id', '=', 'v_venue_infos.id')
            ->join('v_owners', 'v_venue_infos.ve_ow_id', '=', 'v_owners.id')
            ->select('v_halls.*')
            ->where('v_owners.id', Auth::user()->id)
            ->get();

        // check is exist venue info
        $data['venue_info'] = DB::table('v_venue_infos')->where('ve_ow_id', Auth::user()->id)->count();

        // menu
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'hall_list';
        
        return view('front.owner.my_hall', $data);
        
    }

    /**
     * hall add form
     *
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function add_hall() {

        $data['title'] = 'Add Hall';

        $data['facis'] = (new Common)->getall('v_facis');

        $data['techs'] = (new Common)->getall('v_techs');

        $data['events'] = (new Common)->getall('v_event_types');
        
        // menu
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'hall_list';
        
        return view('front.owner.add_hall', $data);

    }

    /**
     * do add hall into database 
     *
     * @param  Request  $request
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function do_add_hall(Request $request) {

        // get venue id
        $ve_id = DB::table('v_venue_infos')->select('id')->where('ve_ow_id', Auth::user()->id)->first();

        // validation
        $request->validate([

            'name' => 'required|unique:v_halls,ha_name|max:256',
            'timing' => 'required',
            'min_rate' => 'required',
            
            'food' => 'required',
            'catering' => 'required',
            'decoration' => 'required',
            'ac' => 'required',

            'min' => 'required',
            'max' => 'required',
            'float' => 'required',

            'board' => 'required',
            'class' => 'required',
            'theater' => 'required',
            'restaurant' => 'required',
            'u_shape' => 'required',
            'open' => 'required',
            
            'bike' => 'required',
            'car' => 'required',
            'bus' => 'required',

            'about' => 'required',
            'terms' => 'required'

        ]);

        // main image upload
        if(Input::file('main_image')){

            $image = Input::file('main_image');
            $main_image  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            //$path = public_path('images/venue/'); // E:\xampp\htdocs\venue\venue_booking
            $base_path = base_path();
            $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
            $image->move($path, $main_image);

        }

        // generate slug
        $slug = str_replace(' ', '-', $request->input('name')); 
        $slug = strtolower($slug);
        
        // hall ------
        $hall = [
            
            've_id' => $ve_id->id,
            'ha_name' => $request->input('name'),
            'ha_slug' => $slug,
            'ha_m_image' => $main_image,

            'ha_timing' => $request->input('timing'),
            'ha_gst_min_rate' => $request->input('min_rate'),
            
            'ha_hi_food' => $request->input('food'),
            'ha_hi_cater' => $request->input('catering'),
            'ha_hi_decor' => $request->input('decoration'),
            'ha_hi_ac' => $request->input('ac'),

            'ha_pa_bike' => $request->input('bike'),
            'ha_pa_car' => $request->input('car'),
            'ha_pa_bus' => $request->input('bus'),

            'ha_ca_min' => $request->input('min'),
            'ha_ca_max' => $request->input('max'),
            'ha_ca_float' => $request->input('float'),

            'ha_se_board' => $request->input('board'),
            'ha_se_class' => $request->input('class'),
            'ha_se_resta' => $request->input('restaurant'),
            'ha_se_theat' => $request->input('theater'),
            'ha_se_ushape' => $request->input('u_shape'),
            'ha_se_open' => $request->input('open'),

            'ha_about' => $request->input('about'),
            'ha_terms' => $request->input('terms')
            
        ];

        $ins_id = (new Common)->save_insert_id('v_halls', $hall);

        if ($ins_id) {

            // facilities  ------------------------
            $facis = $request->input('faci');

            if(!empty($facis[0])){

                (new Common)->delete_hall_option('v_hall_facis', $ins_id);

                foreach ($facis as $faci) {

                    $value = array(
                        'ha_id' => $ins_id,
                        'faci_id' => $faci
                    );

                    (new Common)->save('v_hall_facis', $value);
                }

            }
            
            // tech ------------------------
            $techs = $request->input('tech');

            if(!empty($techs[0])){

                (new Common)->delete_hall_option('v_hall_techs', $ins_id);

                foreach ($techs as $tech) {

                    $value = array(
                        'ha_id' => $ins_id,
                        'tech_id' => $tech
                    );

                    (new Common)->save('v_hall_techs', $value);
                }
            }
            
            // event type ------------------------
            $events = $request->input('event');

            if(!empty($events[0])){

                (new Common)->delete_hall_option('v_hall_event_types', $ins_id);

                foreach ($events as $event) {

                    $value = array(
                        'ha_id' => $ins_id,
                        'ev_id' => $event
                    );

                    (new Common)->save('v_hall_event_types', $value);
                }

            }
            
            // hall image ------------------------
            if(Input::file('images')){

                $images = $request->file('images');

                foreach($images as $image){

                    $filename  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
                    $base_path = base_path();
                    $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
                    //$folderpath  = 'images'.'/';
                    $image->move($path , $filename);

                    // make array
                    $data = [
                        'ha_id' => $ins_id,
                        'ha_image' => $filename
                    ];

                    DB::table('v_hall_images')->insert($data);

                }

            }

            $msg = "Successfully Added!";
            Session::flash('success', $msg);
            return Redirect::back();
            //return redirect('venue-details', $request->input('ve_id'));
            // return Redirect::route('venue-details',$request->input('ve_id'));

        } else {

            $msg = "Not Saved!";
            Session::flash('error', $msg);
            return Redirect::back();

        }
        
    }

    /**
     * edit form by hall id
     *
     * @param  int  $hall_id
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function edit_hall($hall_id) {
        
        $data['title'] = 'Edit Hall';

        $data['menu'] = 'venue_list';
        
        // get facilities
        $data['facis'] = (new Common)->getall('v_facis');
        $data['sel_facis'] = DB::table('v_facis')
                                ->join('v_hall_facis', 'v_facis.id', '=', 'v_hall_facis.faci_id')
                                ->select('v_facis.*')
                                ->where('v_hall_facis.ha_id', $hall_id)
                                ->get();
        
        // get tech
        $data['techs'] = (new Common)->getall('v_techs');
        $data['sel_techs'] = DB::table('v_techs')
                                ->join('v_hall_techs', 'v_techs.id', '=', 'v_hall_techs.tech_id')
                                ->select('v_techs.*')
                                ->where('v_hall_techs.ha_id', $hall_id)
                                ->get();
        
        // get events
        $data['events'] = (new Common)->getall('v_event_types');
        $data['sel_events'] = DB::table('v_event_types')
                                ->join('v_hall_event_types', 'v_event_types.id', '=', 'v_hall_event_types.ev_id')
                                ->select('v_event_types.*')
                                ->where('v_hall_event_types.ha_id', $hall_id)
                                ->get();
        
        // get info
        $data['info'] = DB::table('v_halls')->where('id', $hall_id)->get();

        $data['images'] = DB::table('v_hall_images')->where('ha_id', $hall_id)->get();

        // menu
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'hall_list';

        return view('front.owner.edit_hall', $data);

    }

    /**
     * do edit hall into database 
     *
     * @param  Request  $request
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function do_edit_hall(Request $request) {

        $ha_id = $request->input('ha_id');

        // validate
        $request->validate([

            'name' => "required|unique:v_halls,ha_name,$ha_id|max:256",
            'timing' => 'required',
            'min_rate' => 'required',
            
            'food' => 'required',
            'catering' => 'required',
            'decoration' => 'required',
            'ac' => 'required',

            'min' => 'required',
            'max' => 'required',
            'float' => 'required',

            'board' => 'required',
            'class' => 'required',
            'theater' => 'required',
            'restaurant' => 'required',
            'u_shape' => 'required',
            'open' => 'required',
            
            'bike' => 'required',
            'car' => 'required',
            'bus' => 'required',

            'about' => 'required',
            'terms' => 'required',
           
        ]);

        // main image
        if(Input::file('main_image')){

            // delete from directory
            $del_image = $request->input('old_main_image');

            if(!empty($del_image)){

                $base_path = base_path();
                $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
                $filename = $path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

            }
            
            // upload new 
            $image = Input::file('main_image');
            $main_image  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            //$path = public_path('images/venue/'); // E:\xampp\htdocs\venue\venue_booking
            $base_path = base_path();
            $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
            $image->move($path, $main_image);

        }else{

            $main_image = $request->input('old_main_image');
        }

        // generate slug
        $slug = str_replace(' ', '-', $request->input('name')); 
        $slug = strtolower($slug);

        // hall ------
        $hall = [
            
            'ha_name' => $request->input('name'),
            'ha_slug' => $slug,
            'ha_m_image' => $main_image,

            'ha_timing' => $request->input('timing'),
            'ha_gst_min_rate' => $request->input('min_rate'),
            
            'ha_hi_food' => $request->input('food'),
            'ha_hi_cater' => $request->input('catering'),
            'ha_hi_decor' => $request->input('decoration'),
            'ha_hi_ac' => $request->input('ac'),

            'ha_pa_bike' => $request->input('bike'),
            'ha_pa_car' => $request->input('car'),
            'ha_pa_bus' => $request->input('bus'),

            'ha_ca_min' => $request->input('min'),
            'ha_ca_max' => $request->input('max'),
            'ha_ca_float' => $request->input('float'),

            'ha_se_board' => $request->input('board'),
            'ha_se_class' => $request->input('class'),
            'ha_se_resta' => $request->input('restaurant'),
            'ha_se_theat' => $request->input('theater'),
            'ha_se_ushape' => $request->input('u_shape'),
            'ha_se_open' => $request->input('open'),

            'ha_about' => $request->input('about'),
            'ha_terms' => $request->input('terms')
            
        ];
        DB::table('v_halls')->where('id', $ha_id)->update($hall);

        // facis ------------------------
        if($request->input('faci')){
            
            (new Common)->delete_hall_option('v_hall_facis', $request->input('ha_id'));

            $facis = $request->input('faci');

            foreach ($facis as $faci) {

                $value = array(
                    'ha_id' => $request->input('ha_id'),
                    'faci_id' => $faci
                );

                (new Common)->save('v_hall_facis', $value);
            }
            
        }
        
        // tech ------------------------
        if($request->input('tech')){
            
            $techs = $request->input('tech');
            if(isset($techs)){

                (new Common)->delete_hall_option('v_hall_techs', $request->input('ha_id'));

                foreach ($techs as $tech) {

                    $value = array(
                        'ha_id' => $request->input('ha_id'),
                        'tech_id' => $tech
                    );

                    (new Common)->save('v_hall_techs', $value);
                }

            }
            
        }
       
        // event type ------------------------
        if($request->input('event')){
            
            (new Common)->delete_hall_option('v_hall_event_types', $request->input('ha_id'));

            $events = $request->input('event');

            foreach ($events as $event) {

                $value = array(
                    'ha_id' => $request->input('ha_id'),
                    'ev_id' => $event
                );

                (new Common)->save('v_hall_event_types', $value);
            }
            
        }
        
        // hall images upload
        if(Input::file('images')){

            // delete from directory
            $del_images = $request->input('old_images');

            if(!empty($del_images[0])){

                foreach($del_images as $del_image){

                    $base_path = base_path();
                    $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
                    $filename = $path . $del_image;
                    if (file_exists($filename)) {
                        unlink($filename);
                    }

                }
            }
            
            // delete from db
            DB::table('v_hall_images')->where('ha_id', $request->input('ha_id'))->delete();

            // upload
            $images = $request->file('images');
            foreach($images as $image){

                $filename  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
                $base_path = base_path();
                $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
                //$folderpath  = 'images'.'/';
                $image->move($path , $filename);

                // make array
                $data = [
                    'ha_id' => $request->input('ha_id'),
                    'ha_image' => $filename
                ];

                DB::table('v_hall_images')->insert($data);

            }

        }

        $msg = "Successfully Updated!";
        Session::flash('success', $msg);
        return Redirect::back();
        
    }

    /**
     * delete hall of this owner
     * 
     * @param  int  $id
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function delete($id) {

        //  delete main image
        $hall_main =  DB::table('v_halls')->select('ha_m_image')->where('id', $id)->first();
        
        $base_path = base_path();
        $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
        $filename = $path . $hall_main->ha_m_image;
        if (file_exists($filename)) {
            unlink($filename);
        }
        // delete main row
        DB::table('v_halls')->where('id', $id)->delete();

        // delete other images
        $hall_images =  DB::table('v_hall_images')->where('ha_id', $id)->get();
        foreach ($hall_images as $hall_image) {

            $base_path = base_path();
            $path = str_replace('venue_booking', 'root/images/hall/' , $base_path);
            $filename = $path . $hall_image->ha_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

        }
        // delete image row
        DB::table('v_hall_images')->where('ha_id', $id)->delete();

        // delete other table row
        DB::table('v_hall_facis')->where('ha_id', $id)->delete();
        DB::table('v_hall_techs')->where('ha_id', $id)->delete();
        DB::table('v_hall_event_types')->where('ha_id', $id)->delete();
        
        // delete schedule
        DB::table('v_bookings')->where('hall_id', $id)->delete();
        
        // redirect
        $msg = "Successfully Deleted!";
        Session::flash('success', $msg);
        return Redirect::back();
        
    }

}