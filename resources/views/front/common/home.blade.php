@extends('front.layouts.template')

@section('content')
<!-- ======= Main Slider Area =======-->
<div class="slider-block">    
  <div class="">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @if(isset($sliders[0]))
            <?php $x = 0; foreach($sliders as $slider) { $x++; ?>
            <div class="item @php if($x == 1){ echo 'active';} @endphp">
                <img src="{{ URL::to('photo/slider' , $slider->slider_image ) }}" alt="slider">
            </div>
            <?php } ?>
            @else
            <!-- no slider -->
            <div class="item">
                <img src="{{ URL::to('photo/slider/empty_slider.png') }}" alt="empty slider">
            </div>
            @endif
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </div><!-- /.slider wrapper -->
</div><!-- /.slider-block -->
<div class="vehicle-multi-border blue-white"></div><!-- /.vehicle-multi-border -->
  <!-- ====== About Us Block ====== --> 
    <div class="about-us-block pd-16">
        <div class="container">
        <div class="row">
            <div class="col-lg-1">
                <div class="flash-news-text">
                    খবর
                </div>
            </div>
            <div class="col-lg-11">
                <marquee loop="infinite" behavior="alternate" direction="left" scrollamount="5" onMouseOver="this.stop()" onMouseOut="this.start()">
                    @if(isset($news[0]))
                        @foreach($news as $new)
                            <a class="flash-news" href="{{ url('/news-details',$new->news_id ) }}">&rarr; {{ $new->news_title }}</a>
                        @endforeach
                    @endif
                </marquee>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row tb theme-black about-service-two">
                        <div class="col-lg-12 ">
                            <div class="heading-content style-one header-style-one">
                                <div class="col-md-10 col-sm-10 block-title-area tb-cell">
                                    <br>
                                    <div class="heading-content style-one border">
                                        <h2 class="title">মা-মনি<span> অ্যাম্বুলেন্স</span></h2>
                                    </div><!-- /.heading-content-one -->
                                </div><!-- /.col-md-10 -->
                                <br>
                                {!! $setting[0]->setting_home_text !!}
                            </div><!-- /.heading-content-one -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="shipping-from-content mrt-less-137">
                        <div class="shipping-form-heading">
                            <h4 class="from-subtitle">অ্যাম্বুলেন্স পেতে ঘর গুলা পূরণ করুন।</h4>
                            <h2 class="from-title">অ্যাম্বুলেন্স ভাড়া জন্য</h2>
                        </div><!-- /.shipping-form-heading -->
                        <form class="advance-search-query" action="{{ route('booking') }}" method="POST">
                        {{ csrf_field() }}
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                <strong>Thanks!</strong> {{Session::get('success')}}
                            </div>
                            @endif
                            <div class="regular-search">
                                <div class="form-content">
                                    <div class="row">
                                        <div class="col-md-12 pd-right">
                                            <div class="input">                          
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="name" placeholder="সম্পূর্ণ নাম" required>
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-12 pd-right">
                                            <div class="input">                          
                                                <select name="amb_type" required>
                                                    <option value="">আম্বুল্যান্স বাছায় করুন</option>
                                                    @if($ambtypes[0])
                                                    @foreach($ambtypes as $amb_type)
                                                    <option value="{{ $amb_type->abmulance_type_id }}">{{ $amb_type->abmulance_type_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-6 pd-right">
                                            <div class="input">
                                                <i class="fa fa-map-marker"></i>
                                                <input type="text" name="form" placeholder="কোথা থেকে যাবেন" required>
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-6 pd-left">
                                            <div class="input">
                                                <i class="fa fa-map-marker"></i>
                                                <input type="text" name="to" placeholder="কোথা পর্যন্ত যাবেন" required>
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-6 pd-right">
                                            <div class="input">
                                                <i class="fa fa-calendar"></i>
                                                <input type="text" id="jquery_datepicker" class="form-controller" name="date" placeholder="তারিখ" required>
                                            </div>
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-6 pd-left">
                                            <div class="input">
                                                <i class="fa fa-clock-o"></i>
                                                <input type="text" class="time-selector form-controller" name="time" placeholder="সময়" required>
                                            </div>
                                        </div><!--/.col-md-6-->  
                                        <div class="col-md-6 pd-right">
                                            <div class="input">
                                                    <i class="fa fa-mobile"></i>
                                                <input type="text" name="mobile" placeholder="মোবাইল নাম্বার" required>
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6--> 
                                        <div class="col-md-6 pd-left">
                                            <div class="input">
                                                    <i class="fa fa-at"></i>
                                                <input type="email" name="email" placeholder="ইমেইল">
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->
                                        <div class="col-md-12">
                                            <div class="input">
                                                <textarea rows="2" cols="100" name="address" placeholder="আপনের পূর্ণ ঠিকানা" required></textarea>
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->
                                    </div><!-- /.row -->
                                </div><!-- /.from-content -->
                            </div><!-- /.regular-search -->
                            <div class="check-vehicle-footer">
                                <div class="row">                                
                                    <button type="submit" class="button blue-button white-color">বুক করুন</button>
                                </div><!-- /.row -->
                            </div><!-- /.check-vehicle-footer -->
                        </form>
                    </div><!-- /.shipping-from-content -->
                </div><!-- /.col-md-6 -->

            </div><!-- /.row -->
       </div><!-- /.container -->
    </div><!-- /.about-us-block -->
    <!-- ======Faq Block======= -->
    <div class="faq-bolck pd-75">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block-title-area tb-cell">
                        <div class="heading-content style-one border">
                            <h3 class="subtitle">মা মনি অ্যাম্বুলেন্স </h3>
                            <h2 class="title">প্রায়শই জিজ্ঞাসিত <span>প্রশ্নাবলী</span></h2>
                            <br>
                        </div><!-- /.heading-content-one -->
                    </div><!-- /title -->
                    <div class="faq-accordion">
                        <div class="accordion">
                            <div class="panel-group" id="accordion">
                                @if(isset($faqs[0]))
                                <?php $x = 0; foreach($faqs as $faq) { $x++; ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $x }}">
                                                <i class="fa fa-plus"></i>
                                                <span>{{ $faq->faq_question }}</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_{{ $x }}" class="panel-collapse collapse @php if($x == 1){ echo 'in';} @endphp">
                                        <div class="panel-body">
                                            <p class="accordion-details">{{ $faq->faq_answer }}</p>
                                        </div>
                                    </div> 
                                </div>
                                <?php } ?>
                                @else
                                <!-- empty data -->
                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#">
                                                <i class="fa fa-plus"></i>
                                                <span>No Question</span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @endif
                            </div><!-- /.panel-group -->
                        </div><!-- /.accordion -->
                    </div><!-- /.faq-accordion -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="row tb default-margin-bottom theme-blue">
                        <div class="col-md-10 col-sm-10 block-title-area tb-cell">
                            <div class="heading-content style-one border">
                                <h3 class="subtitle">সেবা ২৪/৭</h3>
                                <h2 class="title">আমাদের <span>সেবাসমূহ</span></h2>
                            </div><!-- /.heading-content-one -->
                        </div><!-- /.col-md-10 -->

                        <!-- block-navigation-area -->
                        <div class="col-md-2 col-sm-2 block-navigation-area hidden-xs tb-cell">
                            <div class="item-navigation nav-right">
                                <a href="#" class="previous-item">
                                    <i class="fa fa-angle-left"></i> 
                                </a>

                                <a href="#" class="next-item">
                                    <i class="fa fa-angle-right"></i> 
                                </a>
                            </div><!-- /.item-navigation -->
                        </div><!-- /.col-md-2 -->
                    </div><!-- /.row -->

                    <div class="service-list-slider slider-style-two owl-carousel" data-item="[1,1,1,1]">
                        <div class="item">
                            <div class="row">
                                @if(isset($services[0]))
                                @foreach($services as $service)              
                                <div class="col-md-6 col-sm-6">
                                    <div class="about-details-content mr-btm-30 theme-blue">
                                        <div class="details-header">      
                                            <div class="image-content">
                                                <i class="renticon renticon-ground-curgo"></i>
                                            </div><!-- /.image-content -->
                                            <h3 class="about-title">{{ $service->service_title }}</h3>
                                        </div><!-- /.details-header -->
                                        <div class="details-description">
                                            <p class="about-details">{{ $service->service_short_desc }}</p>
                                            <a href="{{ url('service', $service->service_slug) }}" class="button nevy-bg">আরো</a>
                                        </div><!-- /.details-description -->
                                    </div><!-- /.about-details-content -->
                                </div><!-- /.col-md-6 -->
                                @endforeach
                                @endif                
                            </div><!-- /.row -->
                        </div><!-- /.item -->
                    </div><!-- /.faq-slider -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.faq-bolck -->

    <!-- ======Fun Facts Block======= -->
    <div class="fun-facts-block background-overlay" style="background-image:url(assets/images/fun-fect-image-three.png)">
        <div class="container">
            <div class="stat theme-blue">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="{{ $setting[0]->setting_total_amb }}" data-speed="2500">{{ $setting[0]->setting_total_amb }}</h3>
                        <div class="milestone-details">আমাদের অ্যাম্বুলেন্স</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="{{ $setting[0]->setting_total_driver }}" data-speed="2500">{{ $setting[0]->setting_total_driver }}</h3>
                        <div class="milestone-details">ড্রাইভার</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="{{ $setting[0]->setting_total_client }}" data-speed="2500">{{ $setting[0]->setting_total_client }}</h3>
                        <div class="milestone-details">শুভ গ্রাহকরা</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="{{ $setting[0]->setting_total_day }}" data-speed="2500">{{ $setting[0]->setting_total_day }}</h3>
                        <div class="milestone-details">ব্যবসায়ে দিন</div>
                    </div>
                </div>
            </div><!-- stat -->
        </div><!-- /.container -->
    </div><!-- /.fun-facts-block -->

    <!-- ======Testimonial Block======= --> 
    <div class="testimonial-block bg-gray-color ex-pdb-120">
        <div class="container">
            <div class="row tb default-margin-bottom theme-blue">
                <div class="col-md-9 block-title-area tb-cell">
                    <div class="heading-content style-one border">
                        <h3 class="subtitle"><i class="fa fa-quote-right blue-color"></i>কিছু পর্যালোচনা</h3>
                        <h2 class="title">ক্লায়েন্টদের প্রতিক্রিয়া</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-10 -->
                <div class="col-md-3 block-navigation-area hidden-xs tb-cell">
                    <div class="pull-right">                    
                        <div class="item-navigation nav-right">
                            <a href="#" class="previous-item">
                                <i class="fa fa-angle-left"></i> 
                            </a>
                            <a href="#" class="next-item">
                                <i class="fa fa-angle-right"></i> 
                            </a>
                        </div><!-- /.item-navigation -->
                    </div><!-- /.pull-right -->
                </div><!-- /.col-md-2 -->
            </div><!-- /.row --> 
            <div class="testimonial-slider slider-style-two owl-carousel" data-item="[3,2,1,1]">
                @if(isset($tests[0]))
                <?php $x = 0; foreach($tests as $test) { $x++; ?>
                <div class="item">
                    <div class="client-image">
                        <img src="{{ URL::to('photo/testimonial' , $test->testi_image ) }}" alt="testimonial" />
                    </div><!-- /.client-image -->
                    <div class="client-detales">                            
                        <h3 class="client-title">{{ $test->testi_name }}</h3>
                        <h5 class="client-subtitle">{{ $test->testi_position }}</h5>
                        <p class="discription">{{ $test->testi_comment }}</p>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- /.star -->
                    </div><!-- /.client-detales -->
                </div><!-- /.item -->          
                <?php } ?>
                @endif
            </div><!-- /.testimonial-slider -->           
        </div><!-- /.container -->
    </div><!-- /.testimonial-area -->
@endsection