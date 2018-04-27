<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookingModel;
use App\AmbulanceTypeModel;
use Session;

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
                    ->orderBy('bookings.booking_id', 'desc')
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

    /**
     * add new booking
     *
     * @return response
     */
    public function store(Request $request) {

        // create object
        $booking = new BookingModel();
        // assign
        $booking->booking_applicant_name = trim($request->input('name'));
        $booking->booking_ambulance_type_id = trim($request->input('amb_type'));
        $booking->booking_form = trim($request->input('form'));
        $booking->booking_to = trim($request->input('to'));
        $booking->booking_date = trim($request->input('date'));
        $booking->booking_time = trim($request->input('time'));
        $booking->booking_mobile = trim($request->input('mobile'));
        $booking->booking_email = trim($request->input('email'));
        $booking->booking_address = trim($request->input('address'));

        if($booking->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
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

            'booking_applicant_name' => $request->input('name'),
            'booking_ambulance_type_id' => $request->input('amb_type'),
            'booking_form' => $request->input('form'),
            'booking_to' => $request->input('to'),
            'booking_date' => $request->input('date'),
            'booking_time' => $request->input('time'),
            'booking_mobile' => $request->input('mobile'),
            'booking_email' => $request->input('email'),
            'booking_address' => $request->input('address'),
        
        ];

        // make object and update
        $bookings = new BookingModel();
        $result = $bookings->where('booking_id', $id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
        }
        
    }

    /**
     * change booking status
     *
     * @return response
     */
    public function status($id, $status) {

        // make object and get booking list
        $bookings = new BookingModel();
        
        if($status == '1'){
            
            $data = [ 'booking_status' => 1 ];
            $result = $bookings->where('booking_id', $id)->update($data);

        }elseif($status == '0'){
            
            $data = [ 'booking_status' => 0 ];
            $result = $bookings->where('booking_id', $id)->update($data);
            
        }

        // redirect
        if($result){
            $msg = "Status Changed Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
        }else{
            $msg = "Error Whiling Status Changed!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
        }

    }
    
    /**
     * delete booking info
     *
     * @return response
     */
    public function delete($id) {

        // make object and get booking list
        $bookings = new BookingModel();
        $result = $bookings->where('booking_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/booking');
        }
        
    }

}