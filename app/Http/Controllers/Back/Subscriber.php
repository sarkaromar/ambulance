<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\SubscriberModel;
use Session;

class Subscriber extends Controller{

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
        $subscribers = new SubscriberModel();

        $lists = $subscribers->select('*')->get();

        $title = 'Subscriber List';
        
        $menu = 'subscriber';

        return view('back.subscriber')
                                        ->withLists($lists)
                                        ->withTitle($title)
                                        ->withMenu($menu);
      
    }

    /**
     * delete subscriber info
     *
     * @return response
     */
    public function delete($id) {

        // make object
        $subscriber = new SubscriberModel();
        
        // delete
        $result =  $subscriber->where('subscriber_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/subscriber');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/subscriber');
        }
        
    }

}