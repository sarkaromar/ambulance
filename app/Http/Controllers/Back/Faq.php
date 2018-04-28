<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\FaqModel;
use Session;

class Faq extends Controller{

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
        $faqs = new FaqModel();

        $lists = $faqs->select('*')->get();

        $title = 'Faq List';
        
        $menu = 'dynamic';

        $submenu = 'faq';

        return view('back.dynamic.faq')
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

        // create object
        $faq = new FaqModel();
        // assign
        $faq->faq_question = $request->input('faq_question');
        $faq->faq_answer = $request->input('faq_answer');

        if($faq->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/faq');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/faq');
        }
    }

    /**
     * update booking
     *
     * @return response
     */
    public function update(Request $request, $id) {
        
        // make array
        $data = [ 

            'faq_question' => $request->input('faq_question'),
            'faq_answer' => $request->input('faq_answer'),
        
        ];

        // make object and update
        $faq = new FaqModel();
        $result = $faq->where('faq_id', $id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/faq');
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return redirect('/admin/faq');
        }
        
    }

    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($id) {

        // make object
        $faq = new FaqModel();
        
        // delete row
        $result = $faq->where('faq_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/faq');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/faq');
        }
        
    }

}