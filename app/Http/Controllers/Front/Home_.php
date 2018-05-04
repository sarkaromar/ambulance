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
use App\SliderModel;
use App\DriverModel;
use App\NewsModel;
use App\TestimonialModel;
use App\ContentModel;
use App\SettingsModel;

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
        $services = ServiceModel::select('service_name','service_short_desc','service_link')->get();

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
        
        // get driver
        $drivers = DriverModel::get();

        // get setting info
        $setting = SettingsModel::all();

        $title = 'আমাদের সম্পর্কে';
        
        $menu = 'about';
        
        return view('front.common.about')
                    ->withContent($content)
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

        $title = 'ভাড়া তালিকা';
        
        $menu = 'rants';

        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.rants')
                    ->withContent($content)
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

        $title = 'খবর';
        
        $menu = 'news';

        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.news')
                ->withNews($news)
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

        $title = 'খবর';
        
        $menu = 'news';

        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.news_details')
                ->withNews($news)
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

        $title = 'প্রশ্নাবলী';
        
        $menu = 'faq';

        // get setting info
        $setting = SettingsModel::all();

        return view('front.common.faq')
                        ->withFaqs($faqs)
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

        // get setting info
        $setting = SettingsModel::all();

        $title = 'শর্ত';
        
        $menu = 'tnc';
        
        return view('front.common.tnc')
                    ->withContent($content)
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

        // get sliders
        // $data['sliders'] = DB::table('v_sliders')->get();

        $title = 'যোগাযোগ';
        
        $menu = 'contact';
        
        // get setting info
        $setting = SettingsModel::all();
        
        return view('front.common.contact')->withTitle($title)->withSetting($setting)->withMenu($menu);
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

        // Mail::to('')->send();
        // Mail::send('front.email_body.contact_email', $data, function($message){
        //     $message->to('mostafijrana1@gmail.com')->subject('someone want to contact'); // site email name, email holder name 
        // });

        Mail::send('front.email_body.contact_email', $data, function ($message){
            $message->to('mostafijrana1@gmail.com');
        });

        Session::flash('success', 'We received your message, we will contact with you!');
        return redirect::Back();
        
    }


}