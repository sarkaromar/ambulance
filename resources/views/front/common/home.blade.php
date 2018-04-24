@extends('front.layouts.template')

@section('content')
<!-- ======= Main Slider Area =======-->
<div class="slider-block">    
  <div class="">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="{{ URL::to('assets/images/ambulance/1.jpg') }}" alt="...">
              </div>
              <div class="item">
                <img src="{{ URL::to('assets/images/ambulance/2.jpg') }}" alt="...">
              </div>
              <div class="item">
                <img src="{{ URL::to('assets/images/ambulance/4.jpg') }}" alt="...">
              </div>
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
                <div class="col-md-6">
                    <div class="row tb theme-black about-service-two">
                        <div class="col-lg-12 ">
                            <div class="heading-content style-one header-style-one">
                                    <div class="col-md-10 col-sm-10 block-title-area tb-cell">
                                        <br>
                                        <div class="heading-content style-one border">
                                            <h2 class="title">মা-মনি<span>অ্যাম্বুলেন্স</span></h2>
                                        </div><!-- /.heading-content-one -->
                                    </div><!-- /.col-md-10 -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quos doloribus maiores architecto explicabo dolorum itaque recusandae! Eius esse ratione blanditiis in reiciendis harum vitae eos culpa amet, magnam eligendi?</p>
                                <p>quos doloribus maiores architecto explicabo dolorum itaque recusandae! Eius esse ratione blanditiis in reiciendis harum vitae eos culpa amet, magnam eligendi?</p>
                                <p>Eius esse ratione blanditiis in reiciendis harum vitae eos culpa amet, magnam eligendi?</p>
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
                        <form action="#" method="get" class="advance-search-query">
                            <div class="regular-search">
                                <div class="form-content">
                                    <div class="row">
                                        <div class="col-md-12 pd-right">
                                            <div class="input">                          
                                                <select>
                                                    <option value="volvo">Choose Ambulance</option>
                                                    <option value="volvo">Non AC Ambulance</option>                                         
                                                    <option value="volvo">AC Ambulance</option>                                         
                                                    <option value="volvo">ICU Ambulance</option>                                        
                                                    <option value="volvo">Freezer Ambulance</option> 
                                                </select>
                                            </div><!-- /.input -->
                                        </div><!--/.col-md-6-->

                                        <div class="col-md-6 pd-right">
                                            <div class="input">
                                                    <i class="fa fa-map-marker"></i>
                                                    <input type="text" name="FirstName" placeholder="From">
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->

                                        <div class="col-md-6 pd-left">
                                            <div class="input">
                                                    <i class="fa fa-map-marker"></i>
                                                <input type="text" name="FirstName" placeholder="To">
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->

                                        <div class="col-md-6 pd-right">
                                            <div class="input">
                                                <i class="fa fa-calendar"></i>
                                                <input type="text" class="date-end date-selector form-controller" placeholder="Date">
                                            </div>
                                        </div><!--/.col-md-6--> 
                                           
                                        <div class="col-md-6 pd-left">
                                            <div class="input">
                                                <i class="fa fa-clock-o"></i>
                                                <input type="text" class="time-selector form-controller" placeholder="15:00 am">
                                            </div>
                                        </div><!--/.col-md-6-->  

                                        <div class="col-md-6 pd-right">
                                            <div class="input">
                                                    <i class="fa fa-mobile"></i>
                                                <input type="text" name="mobile" placeholder="Mobile nubmer">
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6--> 

                                        <div class="col-md-6 pd-left">
                                            <div class="input">
                                                    <i class="fa fa-at"></i>
                                                <input type="email" name="email" placeholder="Email">
                                            </div><!-- /.form-group -->
                                        </div><!--/.col-md-6-->

                                        <div class="col-md-12">
                                            <div class="input">
                                                <textarea rows="2" cols="100" placeholder="Name and Full Address"></textarea>
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
                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <i class="fa fa-plus"></i>
                                                <span>It Is a long established fact That a reander will be Distracted?</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p class="accordion-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethreiuy Morbi mollis Aons ectetur adipiscing elit. Cras vitaetr nibh nisl. Crais etitikis is mauris egethiuy Morbi mollis. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis</p>
                                        </div>
                                    </div> 
                                </div>   

                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                <span>Established fact That a reander will be Distracted?</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="accordion-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethreiuy Morbi mollis Aons ectetur adipiscing elit. Cras vitaetr nibh nisl. Crais etitikis is mauris egethiuy Morbi mollis. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis</p>
                                        </div>
                                    </div> 
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                <span>It Is a long established fact That a reander will be Distracted?</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="accordion-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethreiuy Morbi mollis Aons ectetur adipiscing elit. Cras vitaetr nibh nisl. Crais etitikis is mauris egethiuy Morbi mollis. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis</p>
                                        </div>
                                    </div> 
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                <span>Established fact That a reander will be Distracted?</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="accordion-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethreiuy Morbi mollis Aons ectetur adipiscing elit. Cras vitaetr nibh nisl. Crais etitikis is mauris egethiuy Morbi mollis. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis</p>
                                        </div>
                                    </div> 
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                <span>It is a longEstablished fact That a reander will be Distracted?</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="accordion-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethreiuy Morbi mollis Aons ectetur adipiscing elit. Cras vitaetr nibh nisl. Crais etitikis is mauris egethiuy Morbi mollis. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis</p>
                                        </div>
                                    </div> 
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading theme-blue">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                <span>Established fact That a reander will be Distracted?</span>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapseSix" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="accordion-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethreiuy Morbi mollis Aons ectetur adipiscing elit. Cras vitaetr nibh nisl. Crais etitikis is mauris egethiuy Morbi mollis. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis</p>
                                        </div>
                                    </div> 
                                </div>
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
                                <div class="col-md-6 col-sm-6">
                                    <div class="about-details-content mr-btm-30 theme-blue">
                                        <div class="details-header">      
                                            <div class="image-content">
                                                <i class="renticon renticon-ground-curgo"></i>
                                            </div><!-- /.image-content -->
                                            <h3 class="about-title">নন এসি অ্যাম্বুলেন্স</h3>
                                        </div><!-- /.details-header -->
                                        <div class="details-description">
                                            <p class="about-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis pellden.</p>
                                            <a href="#" class="button nevy-bg">আরো</a>
                                        </div><!-- /.details-description -->
                                    </div><!-- /.about-details-content -->
                                </div><!-- /.col-md-6 -->
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="about-details-content mr-btm-30 theme-blue">
                                        <div class="details-header">     
                                            <div class="image-content">
                                                <i class="renticon renticon-ground-curgo"></i>
                                            </div><!-- /.image-content -->
                                            <h3 class="about-title">এসি অ্যাম্বুলেন্স</h3>
                                        </div><!-- /.details-header -->
                                        <div class="details-description">
                                            <p class="about-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis pellden.</p>
                                            <a href="#" class="button nevy-bg">আরো</a>
                                        </div><!-- /.details-description -->
                                    </div><!-- /.about-details-content -->
                                </div><!-- /.col-md-6 -->
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="about-details-content mr-btm-30 theme-blue">
                                        <div class="details-header">      
                                            <div class="image-content">
                                                <i class="renticon renticon-ground-curgo"></i>
                                            </div><!-- /.image-content -->
                                            <h3 class="about-title">ICU অ্যাম্বুলেন্স</h3>
                                        </div><!-- /.details-header -->
                                        <div class="details-description">
                                            <p class="about-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis pellden tesque offs aiug ueia nec rhoncus.</p>
                                            <a href="#" class="button nevy-bg">আরো</a>
                                        </div><!-- /.details-description -->
                                    </div><!-- /.about-details-content -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 col-sm-6">
                                    <div class="about-details-content mr-btm-30 theme-blue">
                                        <div class="details-header">      
                                            <div class="image-content">
                                                <i class="renticon renticon-ground-curgo"></i>
                                            </div><!-- /.image-content -->
                                            <h3 class="about-title">ফ্রীজার ভ্যান</h3>
                                        </div><!-- /.details-header -->
                                        <div class="details-description">
                                            <p class="about-details">Consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egethiuy Morbi mollis pellden tesque offs aiug ueia nec rhoncus.</p>
                                            <a href="#" class="button nevy-bg">আরো</a>
                                        </div><!-- /.details-description -->
                                    </div><!-- /.about-details-content --> 
                                </div><!-- /.col-md-6 -->                                  
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
                        <h3 class="stat-count highlight" data-form="0" data-to="25" data-speed="2500">25</h3>
                        <div class="milestone-details">আমাদের অ্যাম্বুলেন্স</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="45" data-speed="2500">45</h3>
                        <div class="milestone-details">ড্রাইভার</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="1254" data-speed="2500">1254</h3>
                        <div class="milestone-details">শুভ গ্রাহকরা</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="1525" data-speed="2500">1525</h3>
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
                <div class="item">
                    <div class="client-image">
                        <img src="assets/images/testimonial-image.png" alt="testimonial" />
                    </div><!-- /.client-image -->
                    <div class="client-detales">                            
                        <h3 class="client-title">Single Rakib</h3>
                        <h5 class="client-subtitle">softhopper Manager</h5>
                        <p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- /.star -->
                    </div><!-- /.client-detales -->
                </div><!-- /.item -->

                <div class="item">
                    <div class="client-image">
                        <img src="assets/images/testimonial-image.png" alt="testimonial" />
                    </div><!-- /.client-image -->
                    <div class="client-detales">                            
                        <h3 class="client-title">Bibahito Sagor</h3>
                        <h5 class="client-subtitle">softhopper Manager</h5>
                        <p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- /.star -->
                    </div><!-- /.client-detales -->
                </div><!-- /.item -->

                <div class="item">
                    <div class="client-image">
                        <img src="assets/images/testimonial-image.png" alt="testimonial" />
                    </div><!-- /.client-image -->
                    <div class="client-detales">                            
                        <h3 class="client-title">Pankha Zahid</h3>
                        <h5 class="client-subtitle">softhopper Manager</h5>
                        <p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- /.star -->
                    </div><!-- /.client-detales -->
                </div><!-- /.item -->

                <div class="item">
                    <div class="client-image">
                        <img src="assets/images/testimonial-image.png" alt="testimonial" />
                    </div><!-- /.client-image -->
                    <div class="client-detales">                            
                        <h3 class="client-title">Single Rakib</h3>
                        <h5 class="client-subtitle">softhopper Manager</h5>
                        <p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- /.star -->
                    </div><!-- /.client-detales -->
                </div><!-- /.item -->

                <div class="item">
                    <div class="client-image">
                        <img src="assets/images/testimonial-image.png" alt="testimonial" />
                    </div><!-- /.client-image -->
                    <div class="client-detales">                            
                        <h3 class="client-title">Single Rakib</h3>
                        <h5 class="client-subtitle">softhopper Manager</h5>
                        <p class="discription">Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div><!-- /.star -->
                    </div><!-- /.client-detales -->
                </div><!-- /.item -->
            </div><!-- /.testimonial-slider -->           
        </div><!-- /.container -->
    </div><!-- /.testimonial-area -->
@endsection