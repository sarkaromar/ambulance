<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
// model
use App\User;

use Illuminate\Http\Request;
use Session;
use Auth;



class UsersController extends Controller {
    
    public function __construct(){

		$this->middleware('auth:admin');

	}

	/**
     * Show the post category list
     *
     * @param  
     * @return Illuminate\Http\Response
     */
	public function index() {

		$users = User::all();

		$title = 'Users List';

		$menu = 'user';

		return view('back.users')->withUsers($users)->withTitle($title)->withMenu($menu);

	}

	/**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
		  
        // validate
        $this->validate($request, [
            
            'name' => 'required|max:255|',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required|max:255',
            'phone' => 'required|max:30|unique:users,phone'
            

        ]);

        $gen_pass = bcrypt($request->input('password'));
        $email = strtolower($request->input('email'));

        $user = new User();
        $user->name = trim($request->input('name'));
        $user->email = trim($email);
        $user->password = $gen_pass;
        $user->phone = trim($request->input('phone'));
        $user->status = trim($request->input('status'));
		// save
    	if($user->save()){
            
            Session::flash('success', 'Successfully Added!');
            return redirect('/admin/user');
            
        } else {
            
            Session::flash('error', 'Not Saved!');
            return redirect('/admin/user');
            
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request, $id
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        die('next time');
        // validate
        $this->validate($request, [
            
            'divi_name' => 'required|max:255|unique:divisions,divi_name,' . $id,
            'divi_slug' => 'required|max:255|unique:divisions,divi_slug,' . $id

        ]);

        // assign data
        $division = DivisionsModel::FindOrFail($id);
        $division->divi_name = trim($request->input('divi_name'));
        $division->divi_slug = trim($request->input('divi_slug'));

        // update
    	if($division->save()){
            
            Session::flash('success', 'Successfully updated!');
            return redirect('/admin/division');
            
        } else {
            
            Session::flash('error', 'Not updated!');
            return redirect('/admin/division');
            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id){

        $user = User::find($id);

		// delete
    	if($user->delete()){
            
            Session::flash('success', 'Successfully Deleted!');
            return redirect('/admin/user');
            
        } else {
            
            Session::flash('error', 'Not Deleted!');
            return redirect('/admin/user');
            
        }
    }








}
