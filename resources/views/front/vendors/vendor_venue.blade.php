@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.vendors.left_menu_vendor')
                    </div>

                    <div class="col-lg-10">
                        <div class="user-body-sec booking-manage">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="manage-nav">
                                        <h4>Venue </h4>
                                        <ul>
                                            <li><a href="{{ URL::to('user-venue') }}">Venue</a></li>
                                            <li><a href="{{ URL::to('user-venue-requested') }}">Requested Venue</a></li>
                                            <li><a href="{{ URL::to('user-venue-confirm') }}">Booked Venue</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <pre>{{ print_r($hall_vanue) }}</pre> -->
                                <div class="col-lg-10">
                                    <div class="venue-list">                        
                                        @foreach($hall_vanue as $val)
                                        <div class="venues">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <img src="images/v3.jpg" alt="">
                                                </div>
                                                <div class="col-lg-8">
                                                    <h3>{{ $val->ha_name }} | <i class="fa fa-gift"></i> Package / person from TK {{ $val->ha_gst_min_rate }}</h3>
                                                    <p><i class="fa fa-map-marker"></i> {{ $val->ve_add}} Bangladesh</p>
                                                    <p><i class="fa fa-tag"></i>  Bachelor Party, Engagement, Birthday</p>
                                                    <div class="fecilitys">
                                                        <ul>
                                                            <li><i class="fa fa-car"></i> CAR Parking</i></li>
                                                            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i> AC</i></li>
                                                            <li><i class="fa fa-university" aria-hidden="true"></i> <i class="fa fa-cutlery" aria-hidden="true"></i> Hall & Food</i></li>
                                                            <li><i class="fa fa-glass" aria-hidden="true"></i> Bar</i></li>
                                                            <li><i class="fa fa-users"> 500</i></li>
                                                            <li><i class="fa fa-wheelchair" aria-hidden="true"></i> DA</i></li>
                                                            <li><i class="fa fa-wifi" aria-hidden="true"></i> WIFI</i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="{{ URL::to('user-hall-details', $val->hall_id) }}" class="btn btn-info btn-block">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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