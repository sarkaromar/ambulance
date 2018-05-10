<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

use App\AmbulanceTypeModel;
use App\BookingModel;
use App\FaqModel;
use App\ServiceModel;
use App\ServiceSliderModel;
use App\SliderModel;
use App\DriverModel;
use App\NewsModel;
use App\TestimonialModel;
use App\ContentModel;
use App\SettingsModel;
use App\ContactModel;


use Session;

/**
 * This class used for home page and other static page
 *
 *
 * @author Mostafijur Rahman Rana
 */
class Home_ extends Controller {

    /**
     * Show the home page.
     *
     *  @param 
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function index(){

        // get slider
        $sliders = SliderModel::all();

        // get testimonial
        $tests = TestimonialModel::all();

        // get service
        $services = ServiceModel::select('service_title','service_short_desc','service_slug')->get();

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();

        // get faq
        $faqs = FaqModel::limit(5)->get();

        // get ambulance type
        $ambtypes = AmbulanceTypeModel::all();

        $news = NewsModel::all();

        // get setting info
        $setting = SettingsModel::all();

       $title = 'Maa Moni Ambulance Service 24/7';
        
        $menu = 'home';
        
        return view('front.common.home')
                ->withSliders($sliders)
                ->withTests($tests)
                ->withServices($services)
                ->withServicelists($servicelists)
                ->withFaqs($faqs)
                ->withAmbtypes($ambtypes)
                ->withTitle($title)
                ->withSetting($setting)
                ->withNews($news)
                ->withMenu($menu);
    }

    /**
     * do booking method
     *
     *  @param 
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function do_booking(Request $request){

        // validate
        $this->validate($request, [
            
            'name' => 'required|max:255',
            'amb_type' => 'required|integer|max:255',
            'form' => 'required|max:255',
            'to' => 'required|max:255',
            'date' => 'required|date|max:255',
            'time' => 'required|max:255',
            'mobile' => 'required|max:255',
            'email' => 'email|max:255',
            'address' => 'required|max:5000'

        ]);
        
        // create object
        $booking = new BookingModel();
        // assign
        $booking->booking_applicant_name = trim($request->input('name'));
        $booking->booking_ambulance_type_id = trim($request->input('amb_type'));
        $booking->booking_form = trim($request->input('form'));
        $booking->booking_to = trim($request->input('to'));
        $booking->booking_date = trim($request->input('date'));
        $booking->booking_time = trim($request->input('time'));
        $booking->booking_mobile = trim($request->input('mobile'));
        $booking->booking_email = trim($request->input('email'));
        $booking->booking_address = trim($request->input('address'));

        if($booking->save()){

            Session::flash('success', 'We received your request, we will contact with you!');
            return redirect::Back();

        } else {
            
            Session::flash('error', 'Please, try next time!');
            return redirect::Back();
        
        }

    }

    /**
     * Show the about page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function about(){

        // make object get data
        $contentmodel = new ContentModel();
        $result = $contentmodel->select('content_info')->where('content_name', 'about')->first();
        $content = $result->content_info;

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();
        
        // get driver
        $drivers = DriverModel::get();

        // get setting info
        $setting = SettingsModel::all();

        $title = 'আমাদের সম্পর্কে';
        
        $menu = 'about';
        
        return view('front.common.about')
                    ->withContent($content)
                    ->withServicelists($servicelists)
                    ->withDrivers($drivers)
                    ->withTitle($title)
                    ->withSetting($setting)
                    ->withMenu($menu);
    }

    
    /**
     * Show the rants page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function rants(){

        // make object get data
        $contentmodel = new ContentModel();
        $result = $contentmodel->select('content_info')->where('content_name', 'rants')->first();
        $content = $result->content_info;

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();

        $title = 'ভাড়া তালিকা';
        
        $menu = 'rants';

        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.rants')
                    ->withContent($content)
                    ->withServicelists($servicelists)
                    ->withTitle($title)
                    ->withSetting($setting)
                    ->withMenu($menu);
    }

    /**
     * Show the news page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function news(){

        $news = NewsModel::Paginate(6);

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();

        $title = 'খবর';
        
        $menu = 'news';

        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.news')
                ->withNews($news)
                ->withServicelists($servicelists)
                ->withTitle($title)
                ->withSetting($setting)
                ->withMenu($menu);
    }

    /**
     * Show the news page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function news_details($id){

        $news = NewsModel::where('news_id', $id)->first();

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();

        $title = 'খবর';
        
        $menu = 'news';

        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.news_details')
                ->withNews($news)
                ->withServicelists($servicelists)
                ->withTitle($title)
                ->withSetting($setting)
                ->withMenu($menu);
    }

    /**
     * Show the faq page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function faq(){

        // get faq
        $faqs = FaqModel::all();

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();

        $title = 'প্রশ্নাবলী';
        
        $menu = 'faq';

        // get setting info
        $setting = SettingsModel::all();

        return view('front.common.faq')
                        ->withFaqs($faqs)
                        ->withServicelists($servicelists)
                        ->withTitle($title)
                        ->withSetting($setting)
                        ->withMenu($menu);
    }

    /**
     * Show the tnc page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function tnc(){

        // make object get data
        $contentmodel = new ContentModel();
        $result = $contentmodel->select('content_info')->where('content_name', 'tnc')->first();
        $content = $result->content_info;

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();

        // get setting info
        $setting = SettingsModel::all();

        $title = 'শর্ত';
        
        $menu = 'tnc';
        
        return view('front.common.tnc')
                    ->withContent($content)
                    ->withServicelists($servicelists)
                    ->withTitle($title)
                    ->withSetting($setting)
                    ->withMenu($menu);
    }

    /**
     * Show the contact page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function contact(){

        // get service list menu
        $servicelists = ServiceModel::select('service_title','service_slug')->get();

        $title = 'যোগাযোগ';
        
        $menu = 'contact';
        
        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.contact')
            ->withTitle($title)
            ->withSetting($setting)
            ->withMenu($menu);
    }


    /**
     * for send message
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function send_message(Request $request){

        // validate
        $this->validate($request, [
            
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'massage' => 'required|max:5000'

        ]);

        // make array
        $data = [

            'name' => trim($request->input('name')),
            'email' => trim($request->input('email')),
            'subject' => trim($request->input('subject')),
            'massage' => trim($request->input('massage')),

        ];

        // create object
        $contact = new ContactModel();
        // assign
        $contact->contact_name = trim($request->input('name'));
        $contact->contact_email = trim($request->input('email'));
        $contact->contact_subject = trim($request->input('subject'));
        $contact->contact_massage = trim($request->input('massage'));

        if($contact->save()){

            Session::flash('success', 'We received your message, we will contact with you!');
            return redirect::Back();

        } else {
            
            Session::flash('error', 'Sorry, try next time!');
            return redirect::Back();
        
        }

    }

    /**
     * Show the service page.
     *
     * @param   
     * @return Response
     * @author Mostafijur Rahman Rana
     */
    public function service_details($slug){

        //find service
        if($service = ServiceModel::where('service_slug', $slug)->first()){

            $sliders = ServiceSliderModel::where('service_id', $service->service_id)->get();
            
            $content = $service->service_info;

            // get setting info
            $setting = SettingsModel::all();

            // get ambulance type for form
            $ambtypes = AmbulanceTypeModel::all();

            $title = "$service->service_title";
        
            $menu = 'service';
        
            return view('front.common.service')
                        ->withContent($content)
                        ->withSliders($sliders)
                        ->withAmbtypes($ambtypes)
                        ->withTitle($title)
                        ->withSetting($setting)
                        ->withMenu($menu);

        }else{

            // if not found then back
            return redirect('/');

        }

    }


}