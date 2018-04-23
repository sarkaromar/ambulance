<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// model
use App\DivisionsModel;
use App\PostCategoriesModel;
use App\LostPostModel;
use App\FoundPostModel;

/**
 * This class used for home page and other static page
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Home extends Controller
{
    
    /**
     * Show the home page.
     *
     *  
     * @return Illuminate\Http\Response
     * @author Mostafijur Rahman Rana
     */
    public function index(){   

        // get division
        $divisions = DivisionsModel::all();

        // get post category
        $postcats = PostCategoriesModel::all();

        // create object for lost
        $lost = new LostPostModel();

        $losts = $lost->select('lost_posts.id AS lost_id',
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
                         'areas.area_name')
                ->join('post_categories', 'post_categories.id', '=', 'lost_posts.lost_cat_id')
                ->join('divisions', 'divisions.id', '=', 'lost_posts.lost_divi_id')
                ->join('areas', 'areas.id', '=', 'lost_posts.lost_area_id')
                ->where('lost_posts.lost_status','=', 1)
                ->orderBy('lost_posts.id','DESC')
                ->limit(6)
                ->get();

        // create object for found
        $found = new FoundPostModel();

        $founds = $found->select('found_posts.id AS found_id',
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
                         'areas.area_name')
                ->join('post_categories', 'post_categories.id', '=', 'found_posts.found_cat_id')
                ->join('divisions', 'divisions.id', '=', 'found_posts.found_divi_id')
                ->join('areas', 'areas.id', '=', 'found_posts.found_area_id')
                ->where('found_posts.found_status','=', 1)
                ->orderBy('found_posts.id','DESC')
                ->limit(6)
                ->get();
        
        $title = 'Home';
        
        $menu = 'home';
        
        return view('front.home')
                ->withLosts($losts)
                ->withFounds($founds)
                ->withDivisions($divisions)
                ->withPostcats($postcats)
                ->withTitle($title)
                ->withMenu($menu);
        
    }
    



















    /**
     * get area name by division id (ajax request form home search section)
     *
     * @param  Request  $request
     * @return json encoded data
     * @author Mostafijur Rahman Rana
     */
    public function fetch_area(Request $request) {

        $divi_id = $request->input('division');

        $query = DB::table('v_areas')->where('divi_id', $divi_id)->get();

        $data = json_encode($query);

        echo $data;

    }

    /**
     * Show the about page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function about()
    {
        $data['title'] = 'About us';
        
        $data['menu'] = 'about';
        
        $data['divis']  = DB::table('v_divisions')->get();
        return view('front.about', $data);
    }

    /**
     * Show the our vendors page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function our_vendors()
    {
        $data['title'] = 'Our Vendors';
        
        $data['menu'] = 'vendors';
        
        $data['divis']  = DB::table('v_divisions')->get();

        return view('front.our_vendors', $data);
    }

    /**
     * Show the home page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function contact()
    {
        $data['title'] = 'Contact us';
        
        $data['menu'] = 'contact';
        
        $data['divis']  = DB::table('v_divisions')->get();

        return view('front.contact', $data);
    }

    /**
     * Show the blog page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function blog()
    {
        $data['title'] = 'Blog';
        
        $data['menu'] = 'blog';
        
        $data['divis']  = DB::table('v_divisions')->get();  // get division list

        return view('front.blog', $data);
    }

    /**
     * Show the blog details page.
     *
     *  
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function blog_details()
    {
        $data['title'] = 'Blog Details';
        
        $data['menu'] = 'blog';
        
        $data['divis']  = DB::table('v_divisions')->get();  // get division list

        return view('front.blog_details', $data);
    }


}