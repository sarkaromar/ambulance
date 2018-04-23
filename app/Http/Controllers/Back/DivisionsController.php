<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
// model here
use App\DivisionsModel;

use Illuminate\Http\Request;
use Session;
use Auth;

class DivisionsController extends Controller {
    
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

		$divisions = DivisionsModel::all();

		$title = 'Division List';

		$menu = 'division';

		return view('back.division')->withDivisions($divisions)->withTitle($title)->withMenu($menu);

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
            
            'divi_name' => 'required|max:255|unique:divisions',
            'divi_slug' => 'required|max:255|unique:divisions'

        ]);

        $division = new DivisionsModel();
        $division->divi_name = trim($request->input('divi_name'));
        $division->divi_slug = trim($request->input('divi_slug'));

		// save
    	if($division->save()){
            
            Session::flash('success', 'Successfully Added!');
            return redirect('/admin/division');
            
        } else {
            
            Session::flash('error', 'Not Saved!');
            return redirect('/admin/division');
            
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request, $id
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
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

        $division = DivisionsModel::find($id);

		// delete
    	if($division->delete()){
            
            Session::flash('success', 'Successfully Deleted!');
            return redirect('/admin/division');
            
        } else {
            
            Session::flash('error', 'Not Deleted!');
            return redirect('/admin/division');
            
        }
    }


}