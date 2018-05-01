<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//
use App\ServiceModel;
use App\ServiceSliderModel;
use App\AmbulanceTypeModel;
use App\SettingsModel;

use Session;

/**
 * This class used for home page and other static page
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Service extends Controller {

   /**
     * Show the about page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function non_ac_ambulance(){

        // make object 
        $servicemodel = new ServiceModel();
        $servicslideremodel = new ServiceSliderModel();

        // service data
        $result = $servicemodel->select('service_id', 'service_short_desc', 'service_info')->where('service_name', 'non_ac')->first();

        $serviceid = $result->service_id;

        $content = $result->service_info;

       $sliders = $servicslideremodel->where('service_id', $result->service_id)->get();

        // get ambulance type
        $ambtypes = AmbulanceTypeModel::all();

        // get setting info
        $setting = SettingsModel::all();

        $title = 'Non Ac Ambulance';
        
        $menu = 'non_ac';
        
        return view('front.common.service')
                    ->withContent($content)
                    ->withServiceid($serviceid)
                    ->withSliders($sliders)
                    ->withAmbtypes($ambtypes)
                    ->withTitle($title)
                    ->withSetting($setting)
                    ->withMenu($menu);
    }

    /**
     * Show the about page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function ac_ambulance(){

        // make object 
        $servicemodel = new ServiceModel();
        $servicslideremodel = new ServiceSliderModel();

        // service data
        $result = $servicemodel->select('service_id', 'service_short_desc', 'service_info')->where('service_name', 'ac')->first();

        $serviceid = $result->service_id;

        $content = $result->service_info;

       $sliders = $servicslideremodel->where('service_id', $result->service_id)->get();

       // get ambulance type
        $ambtypes = AmbulanceTypeModel::all();

        // get setting info
        $setting = SettingsModel::all();

        $title = 'Ac Ambulance';
        
        $menu = 'ac';
        
        return view('front.common.service')
                    ->withContent($content)
                    ->withServiceid($serviceid)
                    ->withSliders($sliders)
                    ->withAmbtypes($ambtypes)
                    ->withTitle($title)
                    ->withSetting($setting)
                    ->withMenu($menu);
    }

    /**
     * Show the about page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function icu_ambulance(){

        // make object 
        $servicemodel = new ServiceModel();
        $servicslideremodel = new ServiceSliderModel();

        // service data
        $result = $servicemodel->select('service_id', 'service_short_desc', 'service_info')->where('service_name', 'icu')->first();

        $serviceid = $result->service_id;

        $content = $result->service_info;

        $sliders = $servicslideremodel->where('service_id', $result->service_id)->get();

        // get ambulance type
        $ambtypes = AmbulanceTypeModel::all();

        // get setting info
        $setting = SettingsModel::all();

        $title = 'ICU Ambulance';
        
        $menu = 'icu';
        
        return view('front.common.service')
                    ->withContent($content)
                    ->withServiceid($serviceid)
                    ->withSliders($sliders)
                    ->withAmbtypes($ambtypes)
                    ->withTitle($title)
                    ->withSetting($setting)
                    ->withMenu($menu);
    }

    /**
     * Show the about page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function freezer_ambulance(){

        // make object 
        $servicemodel = new ServiceModel();
        $servicslideremodel = new ServiceSliderModel();

        // service data
        $result = $servicemodel->select('service_id', 'service_short_desc', 'service_info')->where('service_name', 'freezer')->first();

        $serviceid = $result->service_id;

        $content = $result->service_info;

       $sliders = $servicslideremodel->where('service_id', $result->service_id)->get();

        // get ambulance type
        $ambtypes = AmbulanceTypeModel::all();

        // get setting info
        $setting = SettingsModel::all();

        $title = 'Freezer Van';
        
        $menu = 'freezer';
        
        return view('front.common.service')
                    ->withContent($content)
                    ->withServiceid($serviceid)
                    ->withSliders($sliders)
                    ->withAmbtypes($ambtypes)
                    ->withTitle($title)
                    ->withSetting($setting)
                    ->withMenu($menu);
    }

    
}