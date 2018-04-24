@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
<div class="page-header nevy-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">Ambulance</h2>
                <p class="page-description yellow-color">About your Ambulance</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div>

<!-- ====== Vehicle Single Block ====== --> 
<div class="vehicle-single-block vehicle-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="corousel-gallery-content">
                        <div class="gallery">
                             <div class="full-view owl-carousel">
                                  <a class="item" href="#">
                                      <img src="{{ URL::to('assets/images/ambulance/a1.png') }}" alt="post">
                                  </a>
                                  <a class="item" href="#">
                                      <img src="{{ URL::to('assets/images/ambulance/a2.png') }}" alt="post">
                                  </a>
                                  <a class="item" href="#">
                                      <img src="{{ URL::to('assets/images/ambulance/a3.png') }}" alt="post">
                                  </a>
                              </div>

                            <div class="list-view owl-carousel">
                                  <div class="item">
                                      <img src="{{ URL::to('assets/images/ambulance/a1.png') }}" alt="post-image">
                                  </div>
                                  <div class="item">
                                      <img src="{{ URL::to('assets/images/ambulance/a2.png') }}" alt="post-image">
                                  </div>
                                  <div class="item">
                                      <img src="{{ URL::to('assets/images/ambulance/a3.png') }}" alt="post-image">
                                  </div>
                              </div>  
                        </div> <!-- /.gallery-two -->
                    </div> <!-- /.corousel-gallery-content -->

                    <div class="vehicle-single-content">
                        <div class="tb mb-block">
                            <div class="tb-cell mb-block">
                               <h2 class="vehicle-single-title">Maruti 2008 Model ambulance</h2>
                            </div><!-- /.tb-cell -->
                            <div class="tb-cell mb-block">
                               <h2 class="pull-right rent-price">Rent/Day: $350</h2>
                            </div><!-- /.tb-cell -->
                        </div><!-- /.tb -->
                        <div class="clearfix"></div><!-- /.clearfix -->
                        
                        <div class="price-details">
                            <h3 class="details-title">Price Details-</h3>
                            <ul>
                                <li>Rent/Day: $150 (negotiable)</li>
                                <li>Rent/Week: $900 (negotiable)</li>
                                <li>Rent/Month: $3000 (negotiable)</li>
                                <li>Service Charge : 150 USD per month, subject to change</li>
                                <li>Security Deposit : All Security's Company</li>
                                <li>Servicing : Servicing free</li>
                            </ul>
                        </div><!-- /.price -->

                        <div class="vehicle-overview">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="overview-title">Car Overview</h3>
                                    <div class="overview">
                                        <ul>
                                            <li>Class: <span>Compact</span></li>
                                            <li>Price from: <span>8.26 USD / day</span></li>
                                            <li>Gear box: <span>Auto</span></li>
                                            <li>Mileage: <span>Unlimited</span></li>
                                            <li>Max passengers: <span>5</span></li>
                                            <li>Fuel: <span>Octen/Petrol</span></li>
                                            <li>Max luggage: <span>1</span></li>    
                                            <li>Fuel usage: <span>5-6/100km</span></li>    
                                            <li>Doors: <span>4</span></li>
                                            <li>Engine capacity: <span>1400 ccm</span></li>
                                            <li>Deposit: <span>110.00 USD</span></li>    
                                        </ul>
                                    </div><!-- /.vehicle-overview -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.overview -->

                        <div class="vehicle-internal-features">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="features-title">Internal features:</h3>
                                    <ul class="features-list">
                                        <li>A/C full-time</li>
                                        <li>Audio Music</li>
                                        <li>Video Music</li>
                                        <li>Special Set</li>
                                        <li>Fire exit</li>
                                        <li>Sound Proof</li>
                                        <li>Satellite Tracker</li>
                                        <li>Car Heater</li>
                                        <li>Mineral Water</li>
                                        <li>Cold Drinks</li>
                                    </ul>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <h3 class="features-title">External features:</h3>
                                    <ul class="features-list">
                                        <li>4 Doors</li>
                                        <li>2 Outlooking Glass</li>
                                        <li>Awesome Balance System</li>
                                        <li>Powerful Head Light</li>
                                        <li>Backup Fuel</li>
                                        <li>Emergency Break</li>
                                        <li>Emergency Safety Tools</li>
                                    </ul>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.indoor -->
                    </div><!-- /.family-apartment-content -->

                    <div class="hidden-md hidden-lg text-center extend-btn">
                        <span class="extend-icon">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
                </div> <!-- /.col-md-8 -->

                <div class="col-md-4">
                    <div class="vehicle-sidebar pd-zero">                    
                        <form action="#" method="get" class="advance-search-query search-query-two">
                            <h2 class="form-title">Make A Reservation</h2>
                            <div class="form-content available-filter">
                                <div class="regular-search">
                                <div class="form-group">
                                    
                                    <label class="text-uppercase">Choose Ambulance</label>
                                    <div class="input">                                    
                                        <select>
                                            <option value="0" selected="selected">Non-AC Ambulance</option>
                                            <option value="1">AC ambulance</option>
                                            <option value="2">ICU Ambulance</option>
                                            <option value="3">Freezer van</option>
                                        </select>
                                    </div><!-- /.input -->

                                    <label class="text-uppercase">Picking up location</label>
                                    <div class="input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" placeholder="your location" class="pick-location form-controller">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Dropping off location</label>
                                    <div class="input">
                                        <i class="fa fa-map-marker"></i>
                                        <input type="text" placeholder="your location" class="pick-location form-controller">
                                    </div><!--/.input-->

                                    <label>Picking up Date</label>
                                    <div class="input">
                                        <i class="fa fa-calendar"></i>
                                        <input type="text" class="date-start date-selector form-controller" placeholder="Hire On">
                                    </div><!--/.input-->

                                    <label class="text-uppercase">Picking up Time</label>
                                    <div class="input">
                                        <i class="fa fa-clock-o"></i>
                                        <input type="text" class="time-selector form-controller" placeholder="15:00 am">
                                    </div><!--/.input-->
                                    <label class="text-uppercase">Mobile number</label>
                                    <div class="input">
                                        <i class="fa fa-mobile"></i>
                                        <input type="text" class="form-controller" placeholder="+880 . . . . . . . . .">
                                    </div><!--/.input-->
                                    <label class="text-uppercase">Email id</label>
                                    <div class="input">
                                        <i class="fa fa-at"></i>
                                        <input type="text" class="form-controller" placeholder="email">
                                    </div><!--/.input-->

                                </div><!-- /.form-group -->

                                </div><!-- /.div regular-search -->

                                <div class="check-vehicle-footer">
                                    <button type="submit" class="button blue-button">Book Now</button>
                                </div><!-- /.check-vehicle-footer -->
                            </div><!-- /.from-cotent -->
                        </form><!-- /.advance_search_query -->
                        
                    </div><!-- /.vehicle-sidebar -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container  -->
    </div><!-- /.Popular Vehicle Block --> 
@endsection