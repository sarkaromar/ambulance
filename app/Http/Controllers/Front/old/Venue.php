<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
/**
 * This class used for search list page and details venue page
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Venue extends Controller {

    /**
     * received list filter and show the list page.
     *
     * @param  Request  $request
     * @return Response with venue list
     * @author Mostafijur Rahman Rana
     */
    public function list(Request $request) {

        // validate
        $this->validate($request, [
            
            'type' => 'string|nullable|max:11',
            'division' => 'string|required|max:11',
            'area' => 'string|required|max:11',
            'date' => 'date_format:Y-m-d|required|max:64',
            'time' => 'integer|required|max:1',
            'guest' => 'integer|required|max:10000',
            'budget' => 'integer|required|max:10000'
        
        ]);
        
        // put old value and catch it
        $data['type'] = $request->input('type');
        $data['division'] = $request->input('division');
        $data['area'] = $request->input('area');
        $data['date'] = $request->input('date');
        $data['time'] = $request->input('time');
        $data['guest'] = $request->input('guest');
        $data['budget'] = $request->input('budget');

        // making date and time array
        if(!empty($data['date'])){
            // date
            $date = $data['date'] . 'T12:00:00';
            $date = array($date);
            //time
            $time = array($data['time']);
        }

        // get candidate
        if($data['type'] == 'any' && $data['area'] == 'any'){

            $results = DB::table('v_halls')
                ->join('v_venue_infos', 'v_halls.ve_id', '=', 'v_venue_infos.id')
                ->select('v_halls.id')
                ->where('v_halls.ha_ca_min', '<=', $data['guest'])->where('v_halls.ha_gst_min_rate', '<=', $data['budget'])
                ->where('v_venue_infos.ve_division', $data['division'])
                ->get();

        }elseif($data['type'] != 'any' && $data['area'] == 'any'){

            $results = DB::table('v_halls')
                ->join('v_venue_infos', 'v_halls.ve_id', '=', 'v_venue_infos.id')
                ->join('v_hall_event_types', 'v_halls.id', '=', 'v_hall_event_types.ha_id')
                ->select('v_halls.id')
                ->where('v_hall_event_types.ev_id', $data['type'])
                ->where('v_halls.ha_ca_min', '<=', $data['guest'])->where('v_halls.ha_gst_min_rate', '<=', $data['budget'])
                ->where('v_venue_infos.ve_division', $data['division'])
                ->get();

        }elseif($data['type'] == 'any' && $data['area'] != 'any'){

            $results = DB::table('v_halls')
                ->join('v_venue_infos', 'v_halls.ve_id', '=', 'v_venue_infos.id')
                ->select('v_halls.id')
                ->where('v_halls.ha_ca_min', '<=', $data['guest'])->where('v_halls.ha_gst_min_rate', '<=', $data['budget'])
                ->where('v_venue_infos.ve_division', $data['division'])->where('v_venue_infos.ve_area', $data['area'])
                ->get();

        }

        // ---------------------------------
        if(!empty($results)){
            // empty array
            $final_ids = []; 

            // get final id
            foreach ($results as $result) {

                $x = DB::table('v_bookings')
                    ->select('hall_id')
                    ->where('v_bookings.hall_id', $result->id)
                    ->whereNotIn('v_bookings.start_date', $date)
                    ->whereNotIn('v_bookings.shift', $time)
                    ->distinct()
                    ->first();

                if(!empty($x)){
                    $final_ids [] = $result->id;
                }

                $final_ids [] = $result->id;
                
            }

        } else {

            $data['lists'] = '';

        }    

        // ---------------------------------
        if(!empty($final_ids)){

            // empty array
            $final_infos = [];

            foreach ($final_ids as $final_id) {

                // get venue list
                $info = DB::table('v_halls')
                    ->join('v_venue_infos', 'v_halls.ve_id', '=', 'v_venue_infos.id')
                    ->select('v_halls.id','v_halls.ha_name','v_halls.ha_m_image','v_halls.ha_gst_min_rate','v_halls.ha_slug','v_venue_infos.ve_add')
                    ->where('v_halls.id', $final_id)
                    ->first();

                $final_infos [] = $info;
            
            }

            // data manage -------------
            $data['lists'] = $final_infos;
        
        }else{

            $data['lists'] = '';

        }
        
        // title
        $data['title'] = 'Venue List';

        // get dd guest 
        $data['guests']  = DB::table('v_dd_guest')->get();

        // get dd guest 
        $data['budgets']  = DB::table('v_dd_budget')->get();
        
        // get event type
        $data['events'] = DB::table('v_event_types')->get();

        // default area list by division (from home filter)
        $data['areas'] = DB::table('v_areas')->where('divi_id', $data['division'])->get();

        // get divisions
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'venue_list';
        
        return view('front.search_list', $data);
        
    }

    /**
     * Show the list by division page.
     *
     * @param  string  $division
     * @return Response with venue list
     * @author Mostafijur Rahman Rana
     */
    public function division_list($division) {

        // convert to lower
        $division = strtolower($division);

        // is available
        $is_available = DB::table('v_divisions')->select('id')->where('di_slug', $division)->count();
        
        if($is_available > 0){

            // get id
            $divi_id = DB::table('v_divisions')->select('id')->where('di_slug', $division)->first();

        } else {

            // make empty
            $data['lists'] = '';

        }
        
        if(!empty($divi_id)){

            // get list by division id
            $data['lists'] = DB::table('v_halls')
                ->join('v_venue_infos', 'v_halls.ve_id', '=', 'v_venue_infos.id')
                ->select('v_halls.id','v_halls.ha_name','v_halls.ha_m_image','v_halls.ha_gst_min_rate','v_halls.ha_slug','v_venue_infos.ve_add')
                ->where('v_venue_infos.ve_division', $divi_id->id)
                ->get();

        }else{

            // make empty
            $data['lists'] = '';

        }

        // title
        $data['title'] = 'Venue List';

        // get dd guest 
        $data['guests']  = DB::table('v_dd_guest')->get();

        // get dd guest 
        $data['budgets']  = DB::table('v_dd_budget')->get();
        
        // get event type
        $data['events'] = DB::table('v_event_types')->get();

        // default area list by division (from home filter)
        if(!empty($divi_id->id)){

            $data['division'] = $divi_id->id;

            $data['areas'] = DB::table('v_areas')->where('divi_id', $divi_id->id)->get();

        }
        
        // get divisions
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'venue_list';
        
        return view('front.search_list', $data);
        
    }

    
    /**
     * Show the hall details page.
     *
     * @param  string  $slug
     * @return Response with venue details
     * @author Mostafijur Rahman Rana
     */
    public function details($slug) {

        // get main info
        $data['main'] = DB::table('v_halls')->where('ha_slug', $slug)->first();

        // get venue info
        $data['venue'] = DB::table('v_venue_infos')
                        ->join('v_halls', 'v_venue_infos.id', '=', 'v_halls.ve_id')
                        ->select('v_venue_infos.*')
                        ->where('v_halls.id', $data['main']->id)
                        ->first();
        // get owner                 
        $data['owner'] = DB::table('v_owners')->select('ow_name')->where('id', $data['venue']->ve_ow_id)->first();                
                        
        // get image
        $data['images'] = DB::table('v_hall_images')->where('v_hall_images.ha_id', $data['main']->id)->get();
                    
        // tp_config_facilities
        $data['facis'] = DB::table('v_facis')
                        ->join('v_hall_facis', 'v_facis.id', '=', 'v_hall_facis.faci_id')
                        ->select('v_facis.faci_name', 'v_facis.faci_icon')
                        ->where('v_hall_facis.ha_id', $data['main']->id)
                        ->get();

        // tp_hall_techs
        $data['techs'] = DB::table('v_techs')
                        ->join('v_hall_techs', 'v_techs.id', '=', 'v_hall_techs.tech_id')
                        ->select('v_techs.tech_name', 'v_techs.tech_icon')
                        ->where('v_hall_techs.ha_id', $data['main']->id)
                        ->get();

        // tp_hall_suites
        $data['events'] = DB::table('v_event_types')
                        ->join('v_hall_event_types', 'v_event_types.id', '=', 'v_hall_event_types.ev_id')
                        ->select('v_event_types.ev_name')
                        ->where('v_hall_event_types.ha_id', $data['main']->id)
                        ->get();

        // get schedule
        $data['schedules'] = DB::table('v_bookings')->where('hall_id', $data['main']->id)->get();
        
        // put hall id into session for schedule
        session()->put('ha_id', $data['main']->id);      

        $data['title'] = $data['main']->ha_name . ' | Venue Details';

        // menu
        $data['divis']  = DB::table('v_divisions')->get(); // get division list
        $data['menu'] = 'venue_Details';

        return view('front.details', $data);

    }


    /**
     * fire booking data for venue details page calendar plugin
     *
     * @return json encoded data
     * @author Mostafijur Rahman Rana
     */
    public function fire_booking_data() {
        
        $ha_id = session::get('ha_id');
        
        if(!empty($ha_id)){
            
            $datas = DB::table('v_bookings')->where('hall_id', $ha_id)->get();
            $c = DB::table('v_bookings')->where('hall_id', $ha_id)->count();

            if(!empty($datas['0'])){

                foreach ($datas as $data){

                    $event_array[] = array(

                        'id' => $data->id,
                        'title' => $data->event_name,
                        'start' => $data->start_date,
                        'end' => $data->end_date,
                        'allDay' => true,
                        'color' => $data->color

                    );

                }
            
                echo json_encode($event_array);
                exit();

            }

        }
        // something not found return
    }
    

}