<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;

// model here
use App\FoundPostModel;

class FoundPostController extends Controller {
    
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
		// create object
		$found = new FoundPostModel();

		$lists = $found
                ->join('post_categories', 'found_posts.found_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'found_posts.found_divi_id', '=', 'divisions.id')
                ->join('areas', 'found_posts.found_area_id', '=', 'areas.id')
                ->select('found_posts.id AS found_id',
                         'found_posts.found_item_name',
                         'found_posts.found_item_image',
                         'found_posts.found_date',
                         'found_posts.found_details',
                         'found_posts.found_status',
                         'found_posts.found_address',
                         'found_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name')
                ->orderBy('found_posts.id','DESC')
                ->where('found_posts.found_status', 1)
                ->get();

        $active = $found->where('found_posts.found_status', 1)->count();

        $pending = $found->where('found_posts.found_status', 2)->count();

        $inactive = $found->where('found_posts.found_status', 0)->count();
        
        $title = 'Active Found Report List';

		$menu = 'found_reports';

		return view('back.found_reports.active_list')
                    ->withLists($lists)
                    ->withTitle($title)
                    ->withMenu($menu)
                    ->withActive($active)
                    ->withPending($pending)
                    ->withInactive($inactive);

	} 


    /**
     * Show the post category list
     *
     * @param  
     * @return Illuminate\Http\Response
     */
    public function pending() {
        // create object
        $found = new FoundPostModel();

        $lists = $found
                ->join('post_categories', 'found_posts.found_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'found_posts.found_divi_id', '=', 'divisions.id')
                ->join('areas', 'found_posts.found_area_id', '=', 'areas.id')
                ->select('found_posts.id AS found_id',
                         'found_posts.found_item_name',
                         'found_posts.found_item_image',
                         'found_posts.found_date',
                         'found_posts.found_details',
                         'found_posts.found_status',
                         'found_posts.found_address',
                         'found_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name')
                ->orderBy('found_posts.id','DESC')
                ->where('found_posts.found_status', 2)
                ->get();
        
        $active = $found->where('found_posts.found_status', 1)->count();

        $pending = $found->where('found_posts.found_status', 2)->count();

        $inactive = $found->where('found_posts.found_status', 0)->count();

        $title = 'Pending Found Report List';

        $menu = 'found_reports';

        return view('back.found_reports.pending_list')
                    ->withLists($lists)
                    ->withTitle($title)
                    ->withMenu($menu)
                    ->withActive($active)
                    ->withPending($pending)
                    ->withInactive($inactive);

    }

    /**
     * Show the post category list
     *
     * @param  
     * @return Illuminate\Http\Response
     */
    public function inactive() {
        // create object
        $found = new FoundPostModel();

        $lists = $found
                ->join('post_categories', 'found_posts.found_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'found_posts.found_divi_id', '=', 'divisions.id')
                ->join('areas', 'found_posts.found_area_id', '=', 'areas.id')
                ->select('found_posts.id AS found_id',
                         'found_posts.found_item_name',
                         'found_posts.found_item_image',
                         'found_posts.found_date',
                         'found_posts.found_details',
                         'found_posts.found_status',
                         'found_posts.found_address',
                         'found_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name')
                ->orderBy('found_posts.id','DESC')
                ->where('found_posts.found_status', 0)
                ->get();

        $active = $found->where('found_posts.found_status', 1)->count();

        $pending = $found->where('found_posts.found_status', 2)->count();

        $inactive = $found->where('found_posts.found_status', 0)->count();

        $title = 'Inactive Found Report List';

        $menu = 'found_reports';

        return view('back.found_reports.inactive_list')
                        ->withLists($lists)
                        ->withTitle($title)
                        ->withMenu($menu)
                        ->withActive($active)
                        ->withPending($pending)
                        ->withInactive($inactive);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id){

        $found = FoundPostModel::find($id);

		// delete
    	if($found->delete()){
            
            Session::flash('success', 'Successfully Deleted!');
            return redirect('/admin/found-lists');
            
        } else {
            
            Session::flash('error', 'Not Deleted!');
            return redirect('/admin/found-lists');
            
        }
    }


}