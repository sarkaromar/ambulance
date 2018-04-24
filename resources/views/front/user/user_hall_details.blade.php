@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.user.left_menu_user')
                    </div>
                    <div class="col-lg-10">
                        <div class="user-body-sec grid">
                            <div class="venue-details hall">
                                <div class="card" id="highlights">
                                        <h4 class="card-header">Photos</h4>
                                        <div class="card-body">
                                        <div class="photos">
                                            <div class="">
                                                @foreach($images as $img)
                                                <div class="item" data-slide-number="0">
                                                    <img src="{{ URL::to('img/hall_photo/',$img->ha_image) }}" class="img-fluid">
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="clear-fix"></div>
                                        </div>
                                    </div>
                                </div>
                
                                        <div class="card" id="highlights">
                                            <h4 class="card-header">Highlights</h4>
                                            <div class="card-body">
                                                <ul>
                                                    <li><i class="fa fa-car"></i> CAR Parking Facilities</li>
                                                    <li><i class="fa fa-snowflake-o" aria-hidden="true"></i> Air Condition</li>
                                                    <li><i class="fa fa-university" aria-hidden="true"></i> Hall Facilities</li>
                                                    <li><i class="fa fa-cutlery" aria-hidden="true"></i> Food Facilities</li>
                                                    <li><i class="fa fa-glass" aria-hidden="true"></i> Bar/Drinks</li>
                                                    <li><i class="fa fa-users"></i> 500 Person</li>
                                                    <li><i class="fa fa-wheelchair" aria-hidden="true"></i> Disable access</li>
                                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</li>
                                                </ul>
                                                
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                 
                                        <div class="card" id="price">
                                            <h4 class="card-header">Hall Rental Price</h4>
                                            <div class="card-body">
                                                    Guest can bring outside food ( Veg &amp; Non Veg allowed ) <br>
                                                    For Half Day ( Lunch / Dinner ): <strong>tk90000</strong>
                                                    <div class="clear-fix"></div>
                                                    <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="packages">
                                            <h4 class="card-header">Packages</h4>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td>Packages 1</td>
                                                            <td>Packages 2</td>
                                                            <td>Packages 3</td>
                                                            <td>Packages 4</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <tr>
                                                                <td>80</td>
                                                                <td>300</td>
                                                                <td>400</td>
                                                                <td>400</td>
                                                            </tr>
                                                            <tr>
                                                                <td>80</td>
                                                                <td>300</td>
                                                                <td>400</td>
                                                                <td>400</td>
                                                            </tr>
                                                            <tr>
                                                                <td>80</td>
                                                                <td>300</td>
                                                                <td>400</td>
                                                                <td>400</td>
                                                            </tr>
                                                            <tr>
                                                                <td><a class="btn btn-warning">Details</a></td>
                                                                <td><a class="btn btn-warning">Details</a></td>
                                                                <td><a class="btn btn-warning">Details</a></td>
                                                                <td><a class="btn btn-warning">Details</a></td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                
                                        <div class="card" id="facilities">
                                            <h4 class="card-header">Facilities</h4>
                                            <div class="card-body">
                                                <ul>
                                                    <li><i class="fa fa-car"></i> CAR Parking Facilities</li>
                                                    <li><i class="fa fa-snowflake-o" aria-hidden="true"></i> Air Condition</li>
                                                    <li><i class="fa fa-university" aria-hidden="true"></i> Hall Facilities</li>
                                                    <li><i class="fa fa-cutlery" aria-hidden="true"></i> Food Facilities</li>
                                                    <li><i class="fa fa-glass" aria-hidden="true"></i> Bar/Drinks</li>
                                                    <li><i class="fa fa-users"></i> 500 Person</li>
                                                    <li><i class="fa fa-wheelchair" aria-hidden="true"></i> Disable access</li>
                                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</li>
                                                </ul>
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        <div class="card" id="capacity">
                                            <h4 class="card-header">Capacity</h4>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td>Minimum</td>
                                                            <td>Floating Capacity</td>
                                                            <td>Maximum Seating</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>80</td>
                                                            <td>300</td>
                                                            <td>400</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="food">
                                            <h4 class="card-header">Food and Drinks</h4>
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="seat">
                                            <h4 class="card-header">Seating Arrangements</h4>
                                            <div class="card-body">
                                                
                                                    <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <td>Shape Name</td>
                                                                    <td>Theater</td>
                                                                    <td>Class</td>
                                                                    <td>Cluster</td>
                                                                    <td>UShape</td>
                                                                    <td>Board</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                    <tr>
                                                                        <td>Capacity</td>
                                                                        <td>80</td>
                                                                        <td>300</td>
                                                                        <td>400</td>
                                                                        <td>400</td>
                                                                        <td>400</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Shape</td>
                                                                        <td><img src="images/theatre-layout.png" alt=""></td>
                                                                        <td><img src="images/class-layout.png" alt=""></td>
                                                                        <td><img src="images/round-layout.png" alt=""></td>
                                                                        <td><img src="images/u-layout.png" alt=""></td>
                                                                        <td><img src="images/board-layout.png" alt=""></td>
                                                                    </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="clear-fix"></div>
                                                        <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="technology">
                                            <h4 class="card-header">Technology &amp; Equipment</h4>
                                            <div class="card-body">
                                                    <ul>
                                                        <li><i class="fa fa-snowflake-o" aria-hidden="true"></i> Air Condition</li>
                                                        <li><i class="fa fa-wheelchair" aria-hidden="true"></i> Disable access</li>
                                                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</li>
                                                    </ul>
                                                    <div class="clear-fix"></div>
                                                    <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="about">
                                            <h4 class="card-header">About</h4>
                                            <div class="card-body">
                                                <p>Check availabity online for Star Banquetes,Jayanagar 4th Block, Bangalore. Star Banquetes is a banquet hall located in Jayanagar 4th Block , Bangalore .The banquet hall seating capacity is 300 and floating up to 600 can manage.This venue has car parking facility also which can park up to 20 cars. Outside food allowed at this banquet hall.Events permitted at Star Banquetes are Engagement,Wedding Reception,Birthday Party,Get Together Party,Anniversary,Kitty Party,Naming Ceremony.</p>
                                            
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="suited">
                                            <h4 class="card-header">Suited for</h4>
                                            <div class="card-body">
                                                <ul>
                                                    <li><i class="fa fa-tag"></i> Anniversary</li>
                                                    <li><i class="fa fa-tag"></i> Baby Shower</li>
                                                    <li><i class="fa fa-tag"></i> Bachelor Party</li>
                                                    <li><i class="fa fa-tag"></i> Baptism</li>
                                                    <li><i class="fa fa-tag"></i> Birthday Party</li>
                                                    <li><i class="fa fa-tag"></i> Engagement</li>
                                                    <li><i class="fa fa-tag"></i> Get-Together</li>
                                                    <li><i class="fa fa-tag"></i> Kitty Party</li>
                                                    <li><i class="fa fa-tag"></i> Naming Cermony</li>
                                                    <li><i class="fa fa-tag"></i> Reception</li>
                                                    <li><i class="fa fa-tag"></i> Sangeet</li>
                                                    <li><i class="fa fa-tag"></i> Upanayanam</li>
                                                    <li><i class="fa fa-tag"></i> Wedding / Marriage </li>
                                                    <li><i class="fa fa-tag"></i> Annual Function</li>
                                                    <li><i class="fa fa-tag"></i> Board Meetings</li>
                                                    <li><i class="fa fa-tag"></i> Exhibition</li>
                                                    <li><i class="fa fa-tag"></i> Seminars</li>
                                                    <li><i class="fa fa-tag"></i> Team Meeting</li>
                                                </ul> 
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a>  -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="distance">
                                            <h4 class="card-header">Distance from</h4>
                                            <div class="card-body">
                                                   <p><i class="fa fa-bus"></i> Nearest Bus Stop: NA</p> 
                                                   <p><i class="fa fa-train"></i> Nearest Railway Station: NA</p>
                                                   <p><i class="fa fa-plane"></i> Dhaka International Airport is 40.21 Km</p>
                                                   <p><i class="fa fa-subway"></i> Dhaka City subway Station is 9.28 Km</p>
                                                    
                                                <div class="clear-fix"></div>
                                                <!-- <a href="#" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a> -->
                                            </div>
                                        </div>
                                        
                                        <div class="card" id="policies">
                                            <h4 class="card-header">Booking policies</h4>
                                            <div class="card-body">
                                                <p>
                                                        Total Tax : 14.5 % is applicable on Food &amp; Beverages (F&amp;B) <br>
                                                        Advance Amount : 50% of the estimated billing amount to be paid at the time of booking to confirm the venue and remaining amount need to be paid on the day of the event
                                                </p>
                                                <div class="clear-fix"></div>
                                            </div>
                                        </div>
                
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection