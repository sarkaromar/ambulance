<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubscriberModel;

/**
 * this controller use for all common action
 * for front-end
 *
 * @author Mostafijur Rahman Rana
 */
class CommonController extends Controller {

    /**
     * save subscriber from front-end
     *
     * @param  Request  $request
     * @return json boolean
     * @author Mostafijur Rahman Rana
     */
    public function save_subscriber(Request $request) {

        // validate 
        $request->validate([

            'subs_email' => 'required|max:255|unique:subscribers,subscriber_email'

        ]);

        // if validate
        $data = [

            'subscriber_email' => trim($request->input('subs_email'))
        
        ];
        
        // make object
        $subscribermodel = new SubscriberModel();
        // save
        $query = $subscribermodel->insert($data);
        // send response
        $data = json_encode($query);

        echo $data;

    }


}