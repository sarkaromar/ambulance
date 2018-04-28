<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\TestimonialModel;
use Session;

class Testimonial extends Controller{

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
        $testimonials = new TestimonialModel();

        $lists = $testimonials->select('*')->get();

        $title = 'Testimonial List';
        
        $menu = 'dynamic';

        $submenu = 'testimonial';

        return view('back.dynamic.testimonial')
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
            $path = getcwd() . '/photo/testimonial/';
            $image->move($path, $image_name);

        }
        
        // create object
        $testimonials = new TestimonialModel();
        // assign
        $testimonials->testi_image = $image_name;
        $testimonials->testi_name = $request->input('testi_name');
        $testimonials->testi_position = $request->input('testi_position');
        $testimonials->testi_comment = $request->input('testi_comment');

        if($testimonials->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/testimonial');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/testimonial');
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

                $path = getcwd() . '/photo/testimonial/';
                $filename = $path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

            }

            // new image upload
            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/testimonial/';
            $image->move($path, $image_name);

        }else{

            $image_name = $request->input('old_image');

        }

        // make array
        $data = [ 

            'testi_name' => $request->input('testi_name'),
            'testi_position' => $request->input('testi_position'),
            'testi_comment' => $request->input('testi_comment'),
            'testi_image' => $image_name,

        ];

        // make object and update
        $testimonials = new TestimonialModel();
        $result = $testimonials->where('testi_id', $id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/testimonial');
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return redirect('/admin/testimonial');
        }
        
    }

    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($id) {

        // make object
        $testimonials = new TestimonialModel();
        
        // get image
        $data =  $testimonials->select('testi_image')->where('testi_id', $id)->first();
    
        // delete from directory
        if(!empty($data->testi_image)){

            $path = getcwd() . '/photo/testimonial/';
            $filename = $path . $data->testi_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

        }

        // delete row
        $result = $testimonials->where('testi_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/testimonial');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/testimonial');
        }
        
    }

}