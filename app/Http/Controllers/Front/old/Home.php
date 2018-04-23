<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

/**
 * This class used for home page and other static page
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Home extends Controller
{
    
    /**
     * Show the home page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function index(){   

        // get event type
        $data['events'] = DB::table('v_event_types')->get();

        // get divisions
        $data['divis']  = DB::table('v_divisions')->get();

        // get dd guest 
        $data['guests']  = DB::table('v_dd_guest')->get();

        // get dd guest 
        $data['budgets']  = DB::table('v_dd_budget')->get();

        $data['title'] = 'Home';
        
        $data['menu'] = 'home';
        
        return view('front.home', $data);
    }

    /**
     * get area name by division id (ajax request form home search section)
     *
     * @param  Request  $request
     * @return json encoded data
     * @author Mostafijur Rahman Rana
     */
    public function fetch_area(Request $request) {

        $divi_id = $request->input('division');

        $query = DB::table('v_areas')->where('divi_id', $divi_id)->get();

        $data = json_encode($query);

        echo $data;

    }

    /**
     * Show the about page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function about()
    {
        $data['title'] = 'About us';
        
        $data['menu'] = 'about';
        
        $data['divis']  = DB::table('v_divisions')->get();
        return view('front.about', $data);
    }

    /**
     * Show the our vendors page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function our_vendors()
    {
        $data['title'] = 'Our Vendors';
        
        $data['menu'] = 'vendors';
        
        $data['divis']  = DB::table('v_divisions')->get();

        return view('front.our_vendors', $data);
    }

    /**
     * Show the home page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function contact()
    {
        $data['title'] = 'Contact us';
        
        $data['menu'] = 'contact';
        
        $data['divis']  = DB::table('v_divisions')->get();

        return view('front.contact', $data);
    }

    /**
     * Show the blog page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function blog()
    {
        $data['title'] = 'Blog';
        
        $data['menu'] = 'blog';
        
        $data['divis']  = DB::table('v_divisions')->get();  // get division list

        return view('front.blog', $data);
    }

    /**
     * Show the blog details page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function blog_details()
    {
        $data['title'] = 'Blog Details';
        
        $data['menu'] = 'blog';
        
        $data['divis']  = DB::table('v_divisions')->get();  // get division list

        return view('front.blog_details', $data);
    }


}