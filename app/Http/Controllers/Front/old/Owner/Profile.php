<?php

namespace App\Http\Controllers\Front\Owner;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Session;

/**
 * This class used for owner profile related action
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Profile extends Controller {

    public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    /**
     * view owner profile page
     *
     * @return Response 
     * @author Mostafijur Rahman Rana
     */
    public function index() {

        $data['title'] = 'My Profile';
        
        // menu
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'hall_list';
        
        return view('front.owner.my_profile', $data);
        
    }

    /**
     * update owner information
     *
     * @param  Request  $request
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function update(Request $request) {

        $id = Auth::user()->id;
        
        // validation
        $request->validate([

            'name' => 'required|max:255',
            'email' => "required|email|unique:v_owners,ow_email,$id|max:255",
            'phone' => 'required|max:255',
            'about' => 'max:3000'
           
        ]);

        // make array
        $data = [
            
            'ow_name' => $request->input('name'),
            'ow_email' => $request->input('email'),
            'ow_phone' => $request->input('phone'),
            'ow_about' => $request->input('about'),
           
        ];

        // update
        if($r = DB::table('v_owners')->where('id', $id)->update($data)){

            $msg = "Successfully Updated!";
            Session::flash('success', $msg);
            return redirect('/my-profile');

        }else{

            $msg = "Not Updated!";
            Session::flash('error', $msg);
            return redirect('/my-profile');

        }

    }

    /**
     * update owner password (continue...)
     *
     * @param  Request  $request
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function update_pass(Request $request) {

        echo '<pre>';
        echo 'Next time';
        echo '<pre>';

        print_r($_POST);
        exit();
    }


}