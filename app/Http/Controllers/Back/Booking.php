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

        // make object and get booking list
        $bookings = new BookingModel();
        $lists = $bookings
                    ->join('abmulance_types','bookings.booking_ambulance_type_id','=','abmulance_types.abmulance_type_id')
                    ->select('bookings.*','abmulance_types.abmulance_type_name')
                    ->get();


        // get mbulance type
        $ambtypes = AmbulanceTypeModel::all();

        $title = 'Booking List';
        
        $menu = 'booking';

        return view('back.booking.booking_list')
                                        ->withAmbtypes($ambtypes)
                                        ->withLists($lists)
                                        ->withTitle($title)
                                        ->withMenu($menu);
      
    }






}