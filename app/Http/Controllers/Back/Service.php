<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\ServiceModel;
use App\ServiceSliderModel;

use Session;

class Service extends Controller{

    /**
     * Check is admin?
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * show the ac page
     *
     * @return response
     */
    public function index() {

        // make object 
        $servicemodel = new ServiceModel();

        // service data
        $services = $servicemodel::all();

        $title = 'Service List';
        
        $menu = 'service';

        return view('back.service.service_list')
                    ->withServices($services)
                    ->withTitle($title)
                    ->withMenu($menu);
      
    }

    /**
     * show the ac page
     *
     * @return response
     */
    public function add_service() {

        $title = 'Add Service';
        
        $menu = 'service';

        return view('back.service.service_add')
                    ->withTitle($title)
                    ->withMenu($menu);
      
    }

    /**
     * add new booking
     *
     * @return response
     */
    public function do_add_service(Request $request) {

        // create object and assign
        $service = new ServiceModel();
        $service->service_title = $request->input('service_title');
        $service->service_slug = $request->input('service_slug');
        $service->service_short_desc = $request->input('service_short_desc');
        $service->service_info = $request->input('content');
        
        if($service->save()){
            $msg = "Added Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/service');
        } else {
            $msg = "Error whiling added!";
            Session::flash('success', $msg);
            return redirect('/admin/service');
        }
    }

    /**
     * show the service update page
     *
     * @return response
     */
    public function update_service($id) {

        // make object 
        $servicemodel = new ServiceModel();

        // service data
        $service = $servicemodel->select('*')->where('service_id', $id)->first();

        $content = $service->service_info;

        $title = 'Service Update';
        
        $menu = 'service';

        return view('back.service.service_update')
                    ->withService($service)
                    ->withContent($content)
                    ->withTitle($title)
                    ->withMenu($menu);
      
    }

    /**
     * update booking
     *
     * @return response
     */
    public function do_update_service(Request $request, $id) {

        // make array
        $data = [ 

            'service_title' => $request->input('service_title'),
            'service_slug' => $request->input('service_slug'),
            'service_short_desc' => $request->input('service_short_desc'),
            'service_info' => $request->input('content')

        ];

        // make object and update
        $service = new ServiceModel();
        $result = $service->where('service_id', $id)->update($data);

        // redirect
        if($result){
            $msg = "Update Successfully!";
            Session::flash('success', $msg);
            return redirect('/admin/service');
        }else{
            $msg = "Error whiling update!";
            Session::flash('success', $msg);
            return redirect('/admin/service');
        }
        
    }

    /**
     * delete service
     *
     * @return response
     */
    public function delete_service($id) {

        // make object
        $service = new ServiceModel();
        
        // delete row
        $result = $service->where('service_id', $id)->delete();

        // redirect
        if($result){
            $msg = "Successfully Deleted!";
            Session::flash('success', $msg);
            return redirect('/admin/service');
        }else{
            $msg = "Error Whiling Delete!";
            Session::flash('success', $msg);
            return redirect('/admin/service');
        }
        
    }

}