<?php

namespace App\Http\Controllers\Back\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\ServiceModel;
use App\ServiceSliderModel;

use Session;

class Freezer extends Controller{

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
     * show the ac page
     *
     * @return response
     */
    public function index() {

        // make object 
        $servicemodel = new ServiceModel();
        $servicslideremodel = new ServiceSliderModel();

        // service data
        $result = $servicemodel->select('service_id', 'service_short_desc', 'service_info')->where('service_name', 'freezer')->first();

        $serviceid = $result->service_id;

        $content = $result->service_info;

        $sortdesc = $result->service_short_desc;
        
        $sliders = $servicslideremodel->where('service_id', $result->service_id)->get();
        
        $title = 'Freezer Ambulance';
        
        $menu = 'service';

        $submenu = 'freezer';

        return view('back.service.freezer')
                    ->withContent($content)
                    ->withSortdesc($sortdesc)
                    ->withServiceid($serviceid)
                    ->withSliders($sliders)
                    ->withTitle($title)
                    ->withMenu($menu)
                    ->withSubmenu($submenu);
      
    }

    /**
     * add new booking
     *
     * @return response
     */
    public function add_slider(Request $request) {

        // image upload
        if(Input::file('image')){

            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/service_slider/';
            $image->move($path, $image_name);

        }
        
        // create object and assign
        $slider = new ServiceSliderModel();
        $slider->service_id = $request->input('id');
        $slider->service_slider_image = $image_name;
        
        if($slider->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/freezer');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/freezer');
        }
    }

    /**
     * update booking
     *
     * @return response
     */
    public function update_slider(Request $request, $id) {

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
        $result = $slider->where('service_slider_id', $id)->update($data);

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
    public function delete_slider($id) {

        // make object
        $slider = new ServiceSliderModel();
        
        // get image
        $data =  $slider->select('service_slider_image')->where('service_slider_id', $id)->first();
    
        // delete from directory
        if(!empty($data->service_slider_image)){

            $path = getcwd() . '/photo/service_slider/';
            $filename = $path . $data->service_slider_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

        }

        // delete row
        $result = $slider->where('service_slider_id', $id)->delete();

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


    /**
     * update
     *
     * @return response
     */
    public function update_short_desc(Request $request) {

        // make object
        $servicemodel = new ServiceModel();
        
        // assign value
        $data = [
            'service_short_desc' => $request->input('short_desc')
        ];

        // update
        if($servicemodel->where('service_name', 'freezer')->update($data)){
            
            $msg = "Successfully Updated!";
            Session::flash('success', $msg);
            return redirect('/admin/freezer');
            
        } else {
            
            $msg = "Error whiling Updated!";
            Session::flash('error', $msg);
            return redirect('/admin/freezer');
            
        }
    
    }

    /**
     * update service info
     *
     * @return response
     */
    public function update_service_info(Request $request) {

        // make object
        $servicemodel = new ServiceModel();
        
        // assign value
        $data = [
            'service_info' => $request->input('content')
        ];

        // update
        if($servicemodel->where('service_name', 'freezer')->update($data)){
            
            $msg = "Successfully Updated!";
            Session::flash('success', $msg);
            return redirect('/admin/freezer');
            
        } else {
            
            $msg = "Error whiling Updated!";
            Session::flash('error', $msg);
            return redirect('/admin/freezer');
            
        }
    
    }

}