<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Auth;
use DB;

// related model list -----
use App\FoundPostModel;
use App\DivisionsModel;
use App\PostCategoriesModel;

class FoundPostController extends Controller {
    
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function index(){

    	// get division
        $divisions = DivisionsModel::all();

        // get post category
        $postcats = PostCategoriesModel::all();
        
        $title = 'Report about my found item';
        
        $menu = 'foundpost';
        
        return view('front.found.found_post_form')->withDivisions($divisions)->withPostcats($postcats)->withTitle($title)->withMenu($menu);

    }

    /**
     * Store a newly lost report.
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    	// validate
        $this->validate($request, [
            
            'ItemName' => 'required|max:255',
            'ItemCategory' => 'required|integer|max:255',
            'DiviId' => 'required|integer|max:255',
            'AreaId' => 'required|integer|max:255',
            'FoundAddress' => 'required|max:255',
            'FoundDate' => 'required|date|max:255',
            'Details' => 'required|max:5000',

        ]);
        
        // create object
        $found = new FoundPostModel();
        // assign
        $found->found_cat_id = trim($request->input('ItemCategory'));
        $found->found_item_name = trim($request->input('ItemName'));
        $found->found_divi_id = trim($request->input('DiviId'));
        $found->found_area_id = trim($request->input('AreaId'));
        $found->found_date = trim($request->input('FoundDate'));
        $found->found_details = trim($request->input('Details'));
        $found->found_address = trim($request->input('FoundAddress'));
        $found->found_post_by = Auth::user()->id;
        $found->found_user_type = 0; // 0 = user 1 = admin

        if($found->save()){

            // lost image upload ------------------------
            if(null !== Input::file('images')){

                // get images 
                $images = $request->file('images');

                // loop for get single image
                $x = 1;
                foreach($images as $image){
                    
                    // process image name
                    $image_name  = str_random(4).time() . '.' . $image->extension();
                    // define directory path
                    $path = getcwd() . '/assets/images/found_report/';
                    // upload image
                    $image->move($path, $image_name);
                        
                    //first image sace on main table
                    if($x == 1){

                        // make array and save it
                        $data = [
                            'found_item_image' => $image_name
                        ];

                        DB::table('found_posts')->where('id', $found->id)->update($data);
                    }

                    // make array and insert it
                    $data = [
                        'found_id' => $found->id,
                        'found_images' => $image_name
                    ];
                    DB::table('found_images')->insert($data);

                $x++;
                }

            }
            
            Session::flash('success', 'We will review your post!');
            return redirect('/found-report');

        } else {
            
            Session::flash('error', 'Not Saved!');
            return redirect('/found-report');
        
        }
       
    }

    /**
     * Fetch all lost report item
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function found_list(){

        // get post category
        $postcats = PostCategoriesModel::all();

        // get division
        $divisions = DivisionsModel::all();

        // create object
        $found = new FoundPostModel();

        $lists = $found
                ->select('found_posts.id AS found_id',
                         'found_posts.found_item_name',
                         'found_posts.found_item_image',
                         'found_posts.found_date',
                         'areas.area_name')
                ->join('post_categories', 'found_posts.found_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'found_posts.found_divi_id', '=', 'divisions.id')
                ->join('areas', 'found_posts.found_area_id', '=', 'areas.id')
                ->where('found_posts.found_status','=', 1)
                ->orderBy('found_posts.id','DESC')
                ->Paginate(18);
        
        $title = 'Found List';
        
        $menu = 'found_list';
        
        return view('front.found.found_list')->withLists($lists)->withDivisions($divisions)->withPostcats($postcats)->withTitle($title)->withMenu($menu);

    }


    /**
     * Fetch all lost report item
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function found_search_list(Request $request){

        // validate
        $this->validate($request, [
            
            'ItemCategory' => 'required|string|max:255',
            'DiviName' => 'required|string|max:255',
            'AreaName' => 'required|string|max:255',
            'FoundDate' => 'required|date|max:255',
            
        ]);

        // get data assign into variable
        $Itemcategory = trim($request->input('ItemCategory'));
        $Diviname = trim($request->input('DiviName'));
        $Areaname = trim($request->input('AreaName'));
        $Founddate = trim($request->input('FoundDate'));

        // create objec
        $found = new FoundPostModel();

        // search
        $lists = $found->select('found_posts.id AS found_id',
                         'found_posts.found_item_name',
                         'found_posts.found_item_image',
                         'found_posts.found_date',
                         'areas.area_name')
                ->join('post_categories', 'post_categories.id', '=', 'found_posts.found_cat_id')
                ->join('divisions', 'divisions.id', '=', 'found_posts.found_divi_id')
                ->join('areas', 'areas.id', '=', 'found_posts.found_area_id')
                ->where('found_posts.found_status','=', 1)
                ->where('post_categories.post_category_slug', $Itemcategory)
                ->where('divisions.divi_slug', $Diviname)
                ->where('areas.area_slug', $Areaname)
                ->where('found_posts.found_date', $Founddate)
                ->orderBy('found_posts.id','DESC')
                ->Paginate(18);

        // get post category
        $postcats = PostCategoriesModel::all();

        // get division
        $divisions = DivisionsModel::all();

        // get all area list by division id for default value
        $areas = DB::table('areas')
                ->select('areas.area_name','areas.area_slug')
                ->join('divisions', 'areas.area_divi_id', '=', 'divisions.id')
                ->where('divisions.divi_slug',$Diviname)
                ->get();

        $title = 'Found Search';
        
        $menu = 'found_search_list';
        
        return view('front.found.found_search_list')

            ->withItemcategory($Itemcategory)
            ->withDiviname($Diviname)
            ->withAreaname($Areaname)
            ->withFounddate($Founddate)

            ->withLists($lists)
            ->withDivisions($divisions)
            ->withAreas($areas)
            ->withPostcats($postcats)
            ->withTitle($title)
            ->withMenu($menu);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function found_item_details($id){

        // create object
        $found = new FoundPostModel();

        // get data
        $list = $found->select('found_posts.id AS found_id',
                         'found_posts.found_item_name',
                         'found_posts.found_item_image',
                         'found_posts.found_date',
                         'found_posts.found_details',
                         'found_posts.found_address',
                         'found_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name',
                         'users.name',
                         'users.email',
                         'users.phone')
                ->join('post_categories', 'post_categories.id', '=', 'found_posts.found_cat_id')
                ->join('divisions', 'divisions.id', '=', 'found_posts.found_divi_id')
                ->join('areas', 'areas.id', '=', 'found_posts.found_area_id')
                ->join('users', 'users.id', '=', 'found_posts.found_post_by')
                ->where('found_posts.found_status','=', 1)
                ->where('found_posts.id', $id)
                ->first();

        // if no result exist        
       if(empty($list)){

            $list = 'empty';

       }
  
        // get division
        $divisions = DivisionsModel::all();

        // get post category
        $postcats = PostCategoriesModel::all();
        
        $title = 'Found item details';
        
        $menu = 'found_details';
        
        return view('front.found.found_item_details')
        			->withList($list)
        			->withDivisions($divisions)
        			->withPostcats($postcats)
        			->withTitle($title)
        			->withMenu($menu);

    }

    
}