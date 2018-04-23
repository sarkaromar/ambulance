<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
// model here
use App\PostCategoriesModel;


use Illuminate\Http\Request;
use Session;
use Auth;


/**
 * Post category related action
 *
 * @author Mostafijur Rahman Rana
 */
class PostCategoriesController extends Controller{

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

		$postcats = PostCategoriesModel::all();

		$title = 'Post Category List';

		$menu = 'post_cat';

		return view('back.post_categories')->withPostcats($postcats)->withTitle($title)->withMenu($menu);

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
            
            'post_category_name' => 'required|max:255|unique:post_categories',
            'post_category_slug' => 'required|max:255|unique:post_categories'

        ]);

        $post_cat = new PostCategoriesModel();
        $post_cat->post_category_name = trim($request->input('post_category_name'));
        $post_cat->post_category_slug = trim($request->input('post_category_slug'));

		// save
    	if($post_cat->save()){
            
            Session::flash('success', 'Successfully Added!');
            return redirect('/admin/post-category');
            
        } else {
            
            Session::flash('error', 'Not Saved!');
            return redirect('/admin/post-category');
            
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
            
            'post_category_name' => 'required|max:255|unique:post_categories,post_category_name,' . $id,
            'post_category_slug' => 'required|max:255|unique:post_categories,post_category_slug,' . $id

        ]);

        // assign data
        $post_cat = PostCategoriesModel::FindOrFail($id);
        $post_cat->post_category_name = trim($request->input('post_category_name'));
        $post_cat->post_category_slug = trim($request->input('post_category_slug'));

        // update
    	if($post_cat->save()){
            
            Session::flash('success', 'Successfully updated!');
            return redirect('/admin/post-category');
            
        } else {
            
            Session::flash('error', 'Not updated!');
            return redirect('/admin/post-category');
            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id){

        $post_cat = PostCategoriesModel::find($id);

		// delete
    	if($post_cat->delete()){
            
            Session::flash('success', 'Successfully Deleted!');
            return redirect('/admin/post-category');
            
        } else {
            
            Session::flash('error', 'Not Deleted!');
            return redirect('/admin/post-category');
            
        }
    }


}