<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\ServiceSliderModel;
use Session;

class ServiceSlider extends Controller{

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
    public function index($serviceid) {

        // make object and get booking list
        $slider = new ServiceSliderModel();

        $lists = $slider->where('service_id', $serviceid)->get();

        $title = 'Service Slider List';
        
        $menu = 'service';

        return view('back.service.service_slider')
                                        ->withServiceid($serviceid)
                                        ->withLists($lists)
                                        ->withTitle($title)
                                        ->withMenu($menu);
      
    }

    /**
     * add new booking
     *
     * @return response
     */
    public function store(Request $request, $serviceid) {

        // image upload
        if(Input::file('image')){

            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/service_slider/';
            $image->move($path, $image_name);

        }
        
        // create object
        $slider = new ServiceSliderModel();
        // assign
        $slider->service_id = $serviceid;
        $slider->service_slider_image = $image_name;
       
        if($slider->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return Redirect::back();
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return Redirect::back();
        }
    }

    /**
     * update booking
     *
     * @return response
     */
    public function update(Request $request, $service_slider_id) {

        // image upload
        if(Input::file('image')){

            // delete from directory
            $del_image = $request->input('old_image');
            if(!empty($del_image)){

                $path = getcwd() . '/photo/service_slider/';
                $filename = $path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

            }

            // new image upload
            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/service_slider/';
            $image->move($path, $image_name);

        }else{

            $image_name = $request->input('old_image');

        }

        // make array
        $data = [ 

            'service_slider_image' => $image_name,
        
        ];

        // make object and update
        $slider = new ServiceSliderModel();
        $result = $slider->where('service_slider_id', $service_slider_id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return Redirect::back();
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return Redirect::back();
        }
        
    }

    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($service_slider_id) {

        // make object
        $slider = new ServiceSliderModel();
        
        // get image
        $data =  $slider->select('service_slider_image')->where('service_slider_id', $service_slider_id)->first();
    
        // delete from directory
        if(!empty($data->service_slider_image)){

            $path = getcwd() . '/photo/service_slider/';
            $filename = $path . $data->service_slider_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

        }

        // delete row
        $result = $slider->where('service_slider_id', $service_slider_id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return Redirect::back();
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return Redirect::back();
        }
        
    }

}