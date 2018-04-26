<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookingModel;
use App\AmbulanceTypeModel;


class Booking extends Controller{

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

        // get ambulance type
        $amb_types = AmbulanceTypeModel::all();

        // get booking list
        $lists = BookingModel::all();

        $title = 'Booking List';
        
        $menu = 'booking';

        return view('back.booking.booking_list')
                                        ->withAmb_types($amb_types)
                                        ->withLists($lists)
                                        ->withTitle($title)
                                        ->withMenu($menu);
      
    }






}