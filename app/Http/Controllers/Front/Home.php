<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use DB;
// use Auth;
// use Session;

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

        $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'home';
        
        return view('front.common.home')
                ->withTitle($title)
                ->withMenu($menu);
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