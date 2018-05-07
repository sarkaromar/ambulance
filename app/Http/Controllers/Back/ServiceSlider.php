<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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
    public function index($id) {

        // make object and get booking list
        $slider = new ServiceSliderModel();

        $lists = $slider->where('service_id', $id)->get();

        $title = 'Service Slider List';
        
        $menu = 'service';

        return view('back.service.service_slider')
                                        ->withLists($lists)
                                        ->withTitle($title)
                                        ->withMenu($menu);
      
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
            $path = getcwd() . '/photo/slider/';
            $image->move($path, $image_name);

        }
        
        // create object
        $slider = new SliderModel();
        // assign
        $slider->slider_image = $image_name;
        $slider->slider_text1 = $request->input('slider_text1');
        $slider->slider_text2 = $request->input('slider_text2');

        if($slider->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/slider');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/slider');
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

                $path = getcwd() . '/photo/slider/';
                $filename = $path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

            }

            // new image upload
            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/slider/';
            $image->move($path, $image_name);

        }else{

            $image_name = $request->input('old_image');

        }

        // make array
        $data = [ 

            'slider_text1' => $request->input('slider_text1'),
            'slider_text2' => $request->input('slider_text2'),
            'slider_image' => $image_name,
        
        ];

        // make object and update
        $slider = new SliderModel();
        $result = $slider->where('slider_id', $id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/slider');
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return redirect('/admin/slider');
        }
        
    }

    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($id) {

        // make object
        $slider = new SliderModel();
        
        // get image
        $data =  $slider->select('slider_image')->where('slider_id', $id)->first();
    
        // delete from directory
        if(!empty($data->slider_image)){

            $path = getcwd() . '/photo/slider/';
            $filename = $path . $data->slider_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

        }

        // delete row
        $result = $slider->where('slider_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/slider');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/slider');
        }
        
    }

}