<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\DriverModel;
use Session;

class Driver extends Controller{

	/**
     * Check is admin?
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * show the booking list page
     *
     * @return response
     */
    public function index() {

        // make object and get booking list
        $driver = new DriverModel();

        $lists = $driver->select('*')->get();

        $title = 'Driver List';
        
        $menu = 'dynamic';

        $submenu = 'driver';

        return view('back.dynamic.driver')
                                        ->withLists($lists)
                                        ->withTitle($title)
                                        ->withMenu($menu)
                                        ->withSubmenu($submenu);
      
    }

    /**
     * add new booking
     *
     * @return response
     */
    public function store(Request $request) {

        // image upload
        if(Input::file('image')){

            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/driver/';
            $image->move($path, $image_name);

        }
        
        // create object
        $driver = new DriverModel();
        // assign
        $driver->driver_image = $image_name;
        $driver->driver_title = $request->input('driver_title');
        $driver->driver_info = $request->input('driver_info');

        if($driver->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/driver');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/driver');
        }
    }

    /**
     * update booking
     *
     * @return response
     */
    public function update(Request $request, $id) {

        // image upload
        if(Input::file('image')){

            // delete from directory
            $del_image = $request->input('old_image');
            if(!empty($del_image)){

                $path = getcwd() . '/photo/driver/';
                $filename = $path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

            }

            // new image upload
            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/driver/';
            $image->move($path, $image_name);

        }else{

            $image_name = $request->input('old_image');

        }

        // make array
        $data = [ 

            'driver_title' => $request->input('driver_title'),
            'driver_info' => $request->input('driver_info'),
            'driver_image' => $image_name,
        
        ];

        // make object and update
        $driver = new DriverModel();
        $result = $driver->where('driver_id', $id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/driver');
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return redirect('/admin/driver');
        }
        
    }

    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($id) {

        // make object
        $driver = new DriverModel();
        
        // get image
        $data =  $driver->select('driver_image')->where('driver_id', $id)->first();
    
        // delete from directory
        if(!empty($data->driver_image)){

            $path = getcwd() . '/photo/driver/';
            $filename = $path . $data->driver_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

        }

        // delete row
        $result = $driver->where('driver_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/driver');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/driver');
        }
        
    }

}