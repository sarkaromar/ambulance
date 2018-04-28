<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\NewsModel;
use Session;

class News extends Controller{

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
        $news = new NewsModel();

        $lists = $news->select('*')->get();

        $title = 'News List';
        
        $menu = 'dynamic';

        $submenu = 'news';

        return view('back.dynamic.news')
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
            $path = getcwd() . '/photo/news/';
            $image->move($path, $image_name);

        }
        
        // create object
        $news = new NewsModel();
        // assign
        $news->news_image = $image_name;
        $news->news_title = $request->input('news_title');
        $news->news_desc = $request->input('news_desc');

        if($news->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/news');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/news');
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

                $path = getcwd() . '/photo/news/';
                $filename = $path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

            }

            // new image upload
            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/news/';
            $image->move($path, $image_name);

        }else{

            $image_name = $request->input('old_image');

        }

        // make array
        $data = [ 

            'news_title' => $request->input('news_title'),
            'news_desc' => $request->input('news_desc'),
            'news_image' => $image_name,
        
        ];

        // make object and update
        $news = new NewsModel();
        $result = $news->where('news_id', $id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/news');
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return redirect('/admin/news');
        }
        
    }

    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($id) {

        // make object
        $news = new NewsModel();
        
        // get image
        $data =  $news->select('news_image')->where('news_id', $id)->first();
    
        // delete from directory
        if(!empty($data->news_image)){

            $path = getcwd() . '/photo/news/';
            $filename = $path . $data->news_image;
            if (file_exists($filename)) {
                unlink($filename);
            }

        }

        // delete row
        $result = $news->where('news_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/news');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/news');
        }
        
    }

}