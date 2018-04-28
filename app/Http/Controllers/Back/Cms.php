<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContentModel;
use Session;

class Cms extends Controller{

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
     * show the about us page
     *
     * @return response
     */
    public function about() {

        // make object 
        $contentmodel = new ContentModel();

        // get data
        $result = $contentmodel->select('content_info')->where('content_name', 'about')->first();

        $content = $result->content_info;

        $title = 'About';
        
        $menu = 'cms';

        $sub_menu = 'about';

        return view('back.cms.about')
                    ->withContent($content)
                    ->withTitle($title)
                    ->withMenu($menu)
                    ->withSub_menu($sub_menu);
      
    }
    
    /**
     * update about us
     *
     * @return response
     */
    public function about_update(Request $request) {

        // make object
        $contentmodel = new ContentModel();
        
        // assign value
        $data = [
            'content_info' => $request->input('content')
        ];

        // update
        if($contentmodel->where('content_name', 'about')->update($data)){
            
            $msg = "Successfully Updated!";
            Session::flash('success', $msg);
            return redirect('/admin/about');
            
        } else {
            
            $msg = "Error whiling Updated!";
            Session::flash('error', $msg);
            return redirect('/admin/about');
            
        }
    
    }


    /**
     * show the about us page
     *
     * @return response
     */
    public function rants() {

        // make object 
        $contentmodel = new ContentModel();

        // get data
        $result = $contentmodel->select('content_info')->where('content_name', 'rants')->first();

        $content = $result->content_info;

        $title = 'Rants';
        
        $menu = 'cms';

        $submenu = 'rants';

        return view('back.cms.rants')
                    ->withContent($content)
                    ->withTitle($title)
                    ->withMenu($menu)
                    ->withSubmenu($submenu);
      
    }
    
    /**
     * update about us
     *
     * @return response
     */
    public function rants_update(Request $request) {

        // make object
        $contentmodel = new ContentModel();
        
        // assign value
        $data = [
            'content_info' => $request->input('content')
        ];

        // update
        if($contentmodel->where('content_name', 'rants')->update($data)){
            
            $msg = "Successfully Updated!";
            Session::flash('success', $msg);
            return redirect('/admin/rants');
            
        } else {
            
            $msg = "Error whiling Updated!";
            Session::flash('error', $msg);
            return redirect('/admin/rants');
            
        }
    
    }

    /**
     * show the about us page
     *
     * @return response
     */
    public function tnc() {

        // make object 
        $contentmodel = new ContentModel();

        // get data
        $result = $contentmodel->select('content_info')->where('content_name', 'tnc')->first();

        $content = $result->content_info;

        $title = 'Terms & Conditions';
        
        $menu = 'cms';

        $submenu = 'tnc';

        return view('back.cms.tnc')
                    ->withContent($content)
                    ->withTitle($title)
                    ->withMenu($menu)
                    ->withSubmenu($submenu);
      
    }
    
    /**
     * update about us
     *
     * @return response
     */
    public function tnc_update(Request $request) {

        // make object
        $contentmodel = new ContentModel();
        
        // assign value
        $data = [
            'content_info' => $request->input('content')
        ];

        // update
        if($contentmodel->where('content_name', 'tnc')->update($data)){
            
            $msg = "Successfully Updated!";
            Session::flash('success', $msg);
            return redirect('/admin/tnc');
            
        } else {
            
            $msg = "Error whiling Updated!";
            Session::flash('error', $msg);
            return redirect('/admin/tnc');
            
        }
    
    }











}