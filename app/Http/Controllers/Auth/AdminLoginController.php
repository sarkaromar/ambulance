<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __constract()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        $data['title'] = 'Admin Login';
        return view('back.auth.login', $data);
    }

    public function login(Request $request)
    {

        // validate first 
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        // attempt to log 
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            // if successful then redirect to login
            return redirect()->intended(route('admin.dashboard'));
        }
        
        // if unsuccessful then redirect to login show form
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    /**
     * custom logout
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->invalidate();
        return redirect('admin\login');
    }


}
