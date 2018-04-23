<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
// model here
use App\LostPostModel;
// use App\PostCategoriesModel;
// use App\DivisionModel;
// use App\AreaModel;
// use App\User;

use Illuminate\Http\Request;
use Session;
use Auth;
use DB;

class LostPostController extends Controller {
    
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
		$lost = new LostPostModel();

		$lists = $lost
                ->join('post_categories', 'lost_posts.lost_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'lost_posts.lost_divi_id', '=', 'divisions.id')
                ->join('areas', 'lost_posts.lost_area_id', '=', 'areas.id')
                ->select('lost_posts.id AS lost_id',
                         'lost_posts.lost_item_name',
                         'lost_posts.lost_item_image',
                         'lost_posts.lost_date',
                         'lost_posts.lost_reword',
                         'lost_posts.lost_details',
                         'lost_posts.lost_status',
                         'lost_posts.lost_address',
                         'lost_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name')
                ->orderBy('lost_posts.id','DESC')
                ->where('lost_posts.lost_status', 1)
                ->get();

        $active = $lost->where('lost_posts.lost_status', 1)->count();

        $pending = $lost->where('lost_posts.lost_status', 2)->count();

        $inactive = $lost->where('lost_posts.lost_status', 0)->count();
        
        $title = 'Active Lost Report List';

		$menu = 'lost_reports';

		return view('back.lost_reports.active_list')
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
        $lost = new LostPostModel();

        $lists = $lost
                ->join('post_categories', 'lost_posts.lost_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'lost_posts.lost_divi_id', '=', 'divisions.id')
                ->join('areas', 'lost_posts.lost_area_id', '=', 'areas.id')
                ->select('lost_posts.id AS lost_id',
                         'lost_posts.lost_item_name',
                         'lost_posts.lost_item_image',
                         'lost_posts.lost_date',
                         'lost_posts.lost_reword',
                         'lost_posts.lost_details',
                         'lost_posts.lost_status',
                         'lost_posts.lost_address',
                         'lost_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name')
                ->orderBy('lost_posts.id','DESC')
                ->where('lost_posts.lost_status', 2)
                ->get();
        
        $active = $lost->where('lost_posts.lost_status', 1)->count();

        $pending = $lost->where('lost_posts.lost_status', 2)->count();

        $inactive = $lost->where('lost_posts.lost_status', 0)->count();

        $title = 'Pending Lost Report List';

        $menu = 'lost_reports';

        return view('back.lost_reports.pending_list')
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
        $lost = new LostPostModel();

        $lists = $lost
                ->join('post_categories', 'lost_posts.lost_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'lost_posts.lost_divi_id', '=', 'divisions.id')
                ->join('areas', 'lost_posts.lost_area_id', '=', 'areas.id')
                ->select('lost_posts.id AS lost_id',
                         'lost_posts.lost_item_name',
                         'lost_posts.lost_item_image',
                         'lost_posts.lost_date',
                         'lost_posts.lost_reword',
                         'lost_posts.lost_details',
                         'lost_posts.lost_status',
                         'lost_posts.lost_address',
                         'lost_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name')
                ->orderBy('lost_posts.id','DESC')
                ->where('lost_posts.lost_status', 0)
                ->get();

        $active = $lost->where('lost_posts.lost_status', 1)->count();

        $pending = $lost->where('lost_posts.lost_status', 2)->count();

        $inactive = $lost->where('lost_posts.lost_status', 0)->count();

        $title = 'Inactive Lost Report List';

        $menu = 'lost_reports';

        return view('back.lost_reports.inactive_list')
                        ->withLists($lists)
                        ->withTitle($title)
                        ->withMenu($menu)
                        ->withActive($active)
                        ->withPending($pending)
                        ->withInactive($inactive);

    }

	/**
     * change status of secific id
     *
     * @param  int $id, int $status
     * @return Illuminate\Http\Response
     */
    // public function status($id, $status){

    // 	//create object
    // 	$lost = new LostPostModel();

    // 	// make array
    // 	$value = array("lost_status"=> $status);

    // 	// action and redirect
    // 	if($lost->where('id', $id)->update($value)){
            
    //         Session::flash('success', 'Successfully Deleted!');
    //         return redirect('/admin/active-lost-lists');
            
    //     } else {
            
    //         Session::flash('error', 'Not Deleted!');
    //         return redirect('/admin/active-lost-lists');
            
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id){

        $lost = LostPostModel::find($id);

		// delete
    	if($lost->delete()){
            
            Session::flash('success', 'Successfully Deleted!');
            return redirect('/admin/lost-lists');
            
        } else {
            
            Session::flash('error', 'Not Deleted!');
            return redirect('/admin/lost-lists');
            
        }
    }


}
