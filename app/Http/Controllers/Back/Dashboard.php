<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;


class Dashboard extends Controller {

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
     * show the dashboard page
     *
     * @return response
     */
    public function index() {
        
        $title = 'Dashboard';
        
        $menu = 'dashboard';

        return view('back.dashboard')->withTitle($title)->withMenu($menu);;
      
    }
    
}