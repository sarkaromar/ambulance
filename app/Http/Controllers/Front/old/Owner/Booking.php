<?php

namespace App\Http\Controllers\Front\Owner;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Back\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
use Auth;

/**
 * This class used for hall booking related action
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Booking extends Controller {

    public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    /**
     * view booking page by hall id
     *
     * @param int $ha_id 
     * @return Response 
     * @author Mostafijur Rahman Rana
     */
    public function booking($ha_id) {

        $data['title'] = 'My Booking';

        session()->put('ha_id', $ha_id);
        
        $data['ha_id'] = $ha_id;
        
        // booking list
        $data['lists'] = DB::table('v_bookings')->where('hall_id', $ha_id)->get();

        // get timing 
        $data['info'] = DB::table('v_halls')->select('ha_name','ha_timing')->where('id', $ha_id)->first();

        // ?
        //$data['sched_lists'] = DB::table('tp_bookings')->select('id')->where('hall_id', $ha_id)->get();

        // menu
        $data['divis']  = DB::table('v_divisions')->get();
        $data['menu'] = 'hall_list';

        return view('front.owner.my_booking', $data);
        
    }
    
    /**
     * do booking 
     *
     * @param Request $request
     * @return Response 
     * @author Mostafijur Rahman Rana
     */
    public function do_booking(Request $request) {

        // validation
        $request->validate([

            'ha_id' => 'required|int',
            'event_name' => 'required',
            'event_date' => 'required',
            'shift' => 'required|int',
            'booked_by' => 'required',
            
        ]);

        // generate date
        $start_date = $request->input('event_date') . 'T12:00:00';
        $end_date = $request->input('event_date') . 'T24:00:00';

        // booking validation
        $result = DB::table('v_bookings')
                ->where('hall_id', $request->input('ha_id'))
                ->where('start_date', $start_date)
                ->where('shift', $request->input('shift'))
                ->count();

        if(!$result){

            // generate shift based color
            if($request->input('shift') == 0){
                // day
                $color = '#ff5252';
            }elseif($request->input('shift') == 1){
                // morning
                $color = '#eddd4a';
            }elseif($request->input('shift') == 2){
                // evening
                $color = '#42ffdd';
            }

            // make array and save into main table
            $data = [
                
                'hall_id' => $request->input('ha_id'),
                'event_name' => $request->input('event_name'),
                'start_date' => $start_date,
                'end_date' => $end_date,
                'shift' => $request->input('shift'),
                'booked_by' => $request->input('booked_by'),
                'note' => $request->input('note'),
                'color' => $color
                
            ];

            DB::table('v_bookings')->insert($data);
            
            $msg = "Successfully Added!";
            Session::flash('success', $msg);
            return redirect('my-booking/' . $request->input('ha_id'));
        
        }else{

            $msg = "This date " . $start_date . " is alredy booked!";
            Session::flash('error', $msg);
            return Redirect::back();
        }
        
    }

    /**
     * update booking 
     *
     * @param Request $request
     * @return Response 
     * @author Mostafijur Rahman Rana
     */
    public function update_booking(Request $request) {

        // validation
        $request->validate([

            'ha_id' => 'required|int',
            'event_name' => 'required',
            'event_date' => 'required',
            'shift' => 'required|int',
            'booked_by' => 'required',
            
        ]);

        // generate shift based color
        if($request->input('shift') == 0){

            $color = '#ff5252';

        }elseif($request->input('shift') == 1){

            $color = '#eddd4a';

        }elseif($request->input('shift') == 2){

            $color = '#42ffdd';

        }

        if($request->input('shift') == 0){

            // if date not changed
            if($request->input('event_date') == $request->input('o_sd')){

                // make array and save into main table (remove start and end date)
                $data = [
                    
                    'hall_id' => $request->input('ha_id'),
                    'event_name' => $request->input('event_name'),
                    'shift' => $request->input('shift'),
                    'booked_by' => $request->input('booked_by'),
                    'note' => $request->input('note'),
                    'color' => $color
                    
                ];

                DB::table('v_bookings')->where('id', $request->input('id'))->update($data);
                
                $msg = "Successfully Added!";
                Session::flash('success', $msg);
                return redirect('booking-calendar/' . $request->input('ha_id'));

            }else{

                // generate date
                $start_date = $request->input('event_date') . 'T12:00:00';
                $end_date = $request->input('event_date') . 'T24:00:00';

                // booking validation
                $result = DB::table('tp_bookings')
                        ->where('hall_id', $request->input('ha_id'))
                        ->where('start_date', $start_date)
                        ->where('shift', $request->input('shift'))
                        ->count();

                if(!$result){

                    // make array and save into main table
                    $data = [
                        
                        'hall_id' => $request->input('ha_id'),
                        'event_name' => $request->input('event_name'),
                        'start_date' => $start_date,
                        'end_date' => $end_date,
                        'shift' => $request->input('shift'),
                        'booked_by' => $request->input('booked_by'),
                        'note' => $request->input('note'),
                        'color' => $color
                        
                    ];

                    DB::table('v_bookings')->where('id', $request->input('id'))->update($data);
                
                    $msg = "Successfully Added!";
                    Session::flash('success', $msg);
                    return redirect('booking-calendar/' . $request->input('ha_id'));
                    
                }else{

                    $msg = "This date " . $start_date . " is alredy booked!";
                    Session::flash('error', $msg);
                    return Redirect::back();
                }

            }

        }elseif($request->input('shift') == 1 || $request->input('shift') == 2){

            // 2nd phase work


            // if date not changed
            // if($request->input('event_date') == $request->input('o_sd') && $request->input('shift') == $request->input('o_shift')){

            //     // make array and save into main table (remove start and end date)
            //     $data = [
                    
            //         'hall_id' => $request->input('ha_id'),
            //         'event_name' => $request->input('event_name'),
            //         'booked_by' => $request->input('booked_by'),
            //         'note' => $request->input('note'),
            //         'color' => $color
                    
            //     ];

            //     DB::table('tp_bookings')->where('id', $request->input('id'))->update($data);
                
            //     $msg = "Successfully Added!";
            //     Session::flash('success', $msg);
            //     return redirect('admin/booking-calendar/' . $request->input('ha_id'));

            // }

            echo 'Only full day update complete! Next time it will update! Thanks';
            exit();

        }
        
    }
    
    /**
     * delete a booking 
     *
     * @param int $id
     * @return Response 
     * @author Mostafijur Rahman Rana
     */
    public function delete($id) {
        
        // delete 
        if(DB::table('v_bookings')->where('id', $id)->delete()){
            
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return Redirect::back();
            
        } else {
            
            $msg = "Data did not Delete form DB!";
            Session::flash('error', $msg);
            return Redirect::back();
            
        }
        
    }

}