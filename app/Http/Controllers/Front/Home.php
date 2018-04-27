<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\AmbulanceTypeModel;
use App\BookingModel;

// use DB;
// use Auth;
use Session;

/**
 * This class used for home page and other static page
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Home extends Controller {

    /**
     * Show the home page.
     *
     *  @param 
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function index(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        // get ambulance type
        $ambtypes = AmbulanceTypeModel::all();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'home';
        
        return view('front.common.home')
                ->withAmbtypes($ambtypes)
                ->withTitle($title)
                ->withMenu($menu);
    }

    /**
     * do booking method
     *
     *  @param 
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function do_booking(Request $request){

        // validate
        $this->validate($request, [
            
            'name' => 'required|max:255',
            'amb_type' => 'required|integer|max:255',
            'form' => 'required|max:255',
            'to' => 'required|max:255',
            'date' => 'required|date|max:255',
            'time' => 'required|max:255',
            'mobile' => 'required|max:255',
            'email' => 'email|max:255',
            'address' => 'required|max:5000'

        ]);
        
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

            Session::flash('success', 'We received your request, we will contact with you!');
            return redirect::Back();

        } else {
            
            Session::flash('error', 'Please, try next time!');
            return redirect::Back();
        
        }

    }



    /**
     * Show the about page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function about(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'about';
        
        return view('front.common.about')->withTitle($title)->withMenu($menu);
    }

    /**
     * Show the non_ac_ambulance page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function non_ac_ambulance(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'non_ac_ambulance';
        
        return view('front.common.non_ac_ambulance')->withTitle($title)->withMenu($menu);
    }

    /**
     * Show the rants page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function rants(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'rants';
        
        return view('front.common.rants')->withTitle($title)->withMenu($menu);
    }

    /**
     * Show the news page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function news(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'news';
        
        return view('front.common.news')->withTitle($title)->withMenu($menu);
    }

    /**
     * Show the faq page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function faq(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'faq';
        
        return view('front.common.faq')->withTitle($title)->withMenu($menu);
    }

    /**
     * Show the tnc page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function tnc(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'tnc';
        
        return view('front.common.tnc')->withTitle($title)->withMenu($menu);
    }

    /**
     * Show the contact page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function contact(){

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'contact';
        
        return view('front.common.contact')->withTitle($title)->withMenu($menu);
    }

}