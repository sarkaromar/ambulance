<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\SettingsModel;
use Session;

class Settings extends Controller{

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
     * show the about us page
     *
     * @return response
     */
    public function index() {

        // make object 
        $setting = SettingsModel::select('*')->first();

        $title = 'Settings';
        
        $menu = 'settings';

        return view('back.settings.settings')
                    ->withSetting($setting)
                    ->withTitle($title)
                    ->withMenu($menu);
                
    }
    
    /**
     * update about us
     *
     * @return response
     */
    public function update(Request $request) {

        // make object
        $settingsmodel = new SettingsModel();

        // image upload
        if(Input::file('image')){

            // delete from directory
            $del_image = $request->input('old_image');
            if(!empty($del_image)){

                $path = getcwd() . '/photo/logo/';
                $filename = $path . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

            }

            // new image upload
            $image = Input::file('image');
            $image_name  = str_random(4).time() . '.' . $image->getClientOriginalExtension();
            $path = getcwd() . '/photo/logo/';
            $image->move($path, $image_name);

        }else{

            $image_name = $request->input('old_image');

        }
        
        // assign value
        $data = [

            'setting_logo' => $image_name,
            'setting_phone1' => $request->input('setting_phone1'),
            'setting_phone2' => $request->input('setting_phone2'),
            'setting_email1' => $request->input('setting_email1'),
            'setting_email2' => $request->input('setting_email2'),
            'setting_address1' => $request->input('setting_address1'),
            'setting_address2' => $request->input('setting_address2'),
            'setting_fb' => $request->input('setting_fb'),
            'setting_skype' => $request->input('setting_skype'),
            'setting_twitter' => $request->input('setting_twitter'),
            'setting_youtube' => $request->input('setting_youtube'),
            'setting_instagram' => $request->input('setting_instagram'),
            'setting_total_amb' => $request->input('setting_total_amb'),
            'setting_total_driver' => $request->input('setting_total_driver'),
            'setting_total_client' => $request->input('setting_total_client'),
            'setting_total_day' => $request->input('setting_total_day'),
            'setting_home_text' => $request->input('setting_home_text'),
        
        ];

        // update
        if($settingsmodel->where('setting_id', 1)->update($data)){
            
            $msg = "Successfully Updated!";
            Session::flash('success', $msg);
            return redirect('/admin/settings');
            
        } else {
            
            $msg = "Error whiling Updated!";
            Session::flash('error', $msg);
            return redirect('/admin/settings');
            
        }
    
    }

}