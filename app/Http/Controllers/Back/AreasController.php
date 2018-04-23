<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
// model here
use App\AreasModel;
use App\DivisionsModel;

use Illuminate\Http\Request;
use Session;
use Auth;

class AreasController extends Controller {
   	
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

		$areas = AreasModel::all();

		$title = 'Area List';

		$menu = 'area';

		return view('back.area')->withDivisions($divisions)->withAreas($areas)->withTitle($title)->withMenu($menu);

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
        	
        	'area_divi_id' => 'required|max:10',
            'area_name' => 'required|max:255|unique:areas',
            'area_slug' => 'required|max:255|unique:areas'

        ]);

        $area = new AreasModel();
        $area->area_divi_id = trim($request->input('area_divi_id'));
        $area->area_name = trim($request->input('area_name'));
        $area->area_slug = trim($request->input('area_slug'));

		// save
    	if($area->save()){
            
            Session::flash('success', 'Successfully Added!');
            return redirect('/admin/area');
            
        } else {
            
            Session::flash('error', 'Not Saved!');
            return redirect('/admin/area');
            
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
            
            'area_divi_id' => 'required|max:10|unique:areas,area_divi_id,' . $id,
            'area_name' => 'required|max:255|unique:areas,area_name,' . $id,
            'area_slug' => 'required|max:255|unique:areas,area_slug,' . $id

        ]);

        // assign data
        $area = AreasModel::FindOrFail($id);
        $area->area_divi_id = trim($request->input('area_divi_id'));
        $area->area_name = trim($request->input('area_name'));
        $area->area_slug = trim($request->input('area_slug'));

        // update
    	if($area->save()){
            
            Session::flash('success', 'Successfully updated!');
            return redirect('/admin/area');
            
        } else {
            
            Session::flash('error', 'Not updated!');
            return redirect('/admin/area');
            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id){

        $area = AreasModel::find($id);

		// delete
    	if($area->delete()){
            
            Session::flash('success', 'Successfully Deleted!');
            return redirect('/admin/area');
            
        } else {
            
            Session::flash('error', 'Not Deleted!');
            return redirect('/admin/area');
            
        }
    }


}