<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactModel;
use Session;

class Contact extends Controller
{
    /**
     * show the booking list page
     *
     * @return response
     */
    public function index() {

        // make object and get booking list
        $lists = ContactModel::all();

        $title = 'Contact List';
        
        $menu = 'contact';

        return view('back.contact')
                    ->withLists($lists)
                    ->withTitle($title)
                    ->withMenu($menu);
      
    }

    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($id) {

		// delete row
        $result = ContactModel::where('contact_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/contact');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/contact');
        }
        
    }


}
