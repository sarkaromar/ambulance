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
        $this->middleware('auth:admin');
    }
    
    /**
     * show the dashboard
     *
     * @return response
     */
    public function index() {
        
        $title = 'Dashboard';
        
        $menu = 'dash';

        return view('back.dashboard')->withTitle($title)->withMenu($menu);;
      
    }

    /**
     * logout method
     *
     * @return ?
     */
    public function logout() {
        
        session::flush();
        return redirect('/login');
        
    }
    
    
}