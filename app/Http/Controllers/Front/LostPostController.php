<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Auth;
use DB;

// related model list -----
use App\LostPostMpdel;
use App\DivisionsModel;
use App\PostCategoriesModel;
use App\LostPostModel;


class LostPostController extends Controller {
    
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
        
        $title = 'Report about my lost item';
        
        $menu = 'lostpost';
        
        return view('front.lost.lost_post_form')->withDivisions($divisions)->withPostcats($postcats)->withTitle($title)->withMenu($menu);

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
            'LostAddress' => 'required|max:255',
            'LostDate' => 'required|date|max:255',
            'Reward' => 'max:2',
            'RewardNote' => 'max:5000',
            'Details' => 'required|max:5000',

        ]);
        
        // reward generate
        if($request->input('Reward')){
            $reward = 1;
        }else{
            $reward = 0;
        }

        // create object
        $lost = new LostPostModel();
        // assign
        $lost->lost_cat_id = trim($request->input('ItemCategory'));
        $lost->lost_item_name = trim($request->input('ItemName'));
        $lost->lost_divi_id = trim($request->input('DiviId'));
        $lost->lost_area_id = trim($request->input('AreaId'));
        $lost->lost_date = trim($request->input('LostDate'));
        $lost->lost_reword = $reward;
        $lost->lost_reword_note = trim($request->input('RewardNote'));
        $lost->lost_details = trim($request->input('Details'));
        $lost->lost_address = trim($request->input('LostAddress'));
        $lost->lost_post_by = Auth::user()->id;
        $lost->lost_user_type = 0; // 0 = user 1 = admin

        if($lost->save()){

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
                    $path = getcwd() . '/assets/images/lost_report/';
                    // upload image
                    $image->move($path, $image_name);
                        
                    //first image sace on main table
                    if($x == 1){

                        // make array and save it
                        $data = [
                            'lost_item_image' => $image_name
                        ];

                        DB::table('lost_posts')->where('id', $lost->id)->update($data);
                    }

                    // make array and insert it
                    $data = [
                        'lost_id' => $lost->id,
                        'lost_images' => $image_name
                    ];
                    DB::table('lost_images')->insert($data);

                $x++;
                }

            }
            
            Session::flash('success', 'We will review your post!');
            return redirect('/lost-report');

        } else {
            
            Session::flash('error', 'Not Saved!');
            return redirect('/lost-report');
        
        }
       
    }

    /**
     * Fetch all lost report item
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function lost_list(){

        // get post category
        $postcats = PostCategoriesModel::all();

        // get division
        $divisions = DivisionsModel::all();

        // create object
        $lost = new LostPostModel();

        $lists = $lost
                ->select('lost_posts.id AS lost_id',
                         'lost_posts.lost_item_name',
                         'lost_posts.lost_item_image',
                         'lost_posts.lost_date',
                         'lost_posts.lost_reword',
                         'areas.area_name')
                ->join('post_categories', 'lost_posts.lost_cat_id', '=', 'post_categories.id')
                ->join('divisions', 'lost_posts.lost_divi_id', '=', 'divisions.id')
                ->join('areas', 'lost_posts.lost_area_id', '=', 'areas.id')
                ->where('lost_posts.lost_status','=', 1)
                ->orderBy('lost_posts.id','DESC')
                ->Paginate(18);
        
        $title = 'Lost Item List';
        
        $menu = 'lost_list';
        
        return view('front.lost.lost_list')->withLists($lists)->withDivisions($divisions)->withPostcats($postcats)->withTitle($title)->withMenu($menu);

    }


    /**
     * Fetch all lost report item
     *
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function lost_search_list(Request $request){

        // validate
        $this->validate($request, [
            
            'ItemCategory' => 'required|string|max:255',
            'DiviName' => 'required|string|max:255',
            'AreaName' => 'required|string|max:255',
            'LostDate' => 'required|date|max:255',
            
        ]);

        // get data assign into variable
        $Itemcategory = trim($request->input('ItemCategory'));
        $Diviname = trim($request->input('DiviName'));
        $Areaname = trim($request->input('AreaName'));
        $Lostdate = trim($request->input('LostDate'));

        // create objec
        $lost = new LostPostModel();

        // search
        $lists = $lost->select('lost_posts.id AS lost_id',
                         'lost_posts.lost_item_name',
                         'lost_posts.lost_item_image',
                         'lost_posts.lost_date',
                         'lost_posts.lost_reword',
                         'areas.area_name')
                ->join('post_categories', 'post_categories.id', '=', 'lost_posts.lost_cat_id')
                ->join('divisions', 'divisions.id', '=', 'lost_posts.lost_divi_id')
                ->join('areas', 'areas.id', '=', 'lost_posts.lost_area_id')
                ->where('lost_posts.lost_status','=', 1)
                ->where('post_categories.post_category_slug', $Itemcategory)
                ->where('divisions.divi_slug', $Diviname)
                ->where('areas.area_slug', $Areaname)
                ->where('lost_posts.lost_date', $Lostdate)
                ->orderBy('lost_posts.id','DESC')
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

        $title = 'Lost Search';
        
        $menu = 'lost_search_list';
        
        return view('front.lost.lost_search_list')

            ->withItemcategory($Itemcategory)
            ->withDiviname($Diviname)
            ->withAreaname($Areaname)
            ->withLostdate($Lostdate)

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
    public function lost_item_details($id){

        // create object
        $lost = new LostPostModel();

        // get data
        $list = $lost->select('lost_posts.id AS lost_id',
                         'lost_posts.lost_item_name',
                         'lost_posts.lost_item_image',
                         'lost_posts.lost_date',
                         'lost_posts.lost_reword',
                         'lost_posts.lost_details',
                         'lost_posts.lost_address',
                         'lost_posts.created_at',
                         'post_categories.id AS post_cat_id',
                         'post_categories.post_category_name',
                         'divisions.id AS divi_id',
                         'divisions.divi_name',
                         'areas.id AS area_id',
                         'areas.area_name',
                         'users.name',
                         'users.email',
                         'users.phone')
                ->join('post_categories', 'post_categories.id', '=', 'lost_posts.lost_cat_id')
                ->join('divisions', 'divisions.id', '=', 'lost_posts.lost_divi_id')
                ->join('areas', 'areas.id', '=', 'lost_posts.lost_area_id')
                ->join('users', 'users.id', '=', 'lost_posts.lost_post_by')
                ->where('lost_posts.lost_status','=', 1)
                ->where('lost_posts.id', $id)
                ->first();

        // if no result exist        
       if(empty($list)){

            $list = 'empty';

       }
  
        // get division
        $divisions = DivisionsModel::all();

        // get post category
        $postcats = PostCategoriesModel::all();
        
        $title = 'Lost item details';
        
        $menu = 'lost_details';
        
        return view('front.lost.lost_item_details')->withList($list)->withDivisions($divisions)->withPostcats($postcats)->withTitle($title)->withMenu($menu);

    }

    


}
