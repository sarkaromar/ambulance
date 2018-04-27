@extends('front.layouts.template')

@section('content')

<!-- mainbody section -->
    <section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.owner.left_menu')
                    </div>

                    <div class="col-lg-10">
                        <div class="user-body-sec booking-manage">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="manage-nav">
                                        <h4>Booking Manage</h4>
                                        <ul>
                                            <li><a href="{{url('booking-manager')}}">Booking status</a></li>
                                            <li><a href="{{url('booking-request')}}">Booking Request</a></li>
                                            <li><a href="{{url('booking-manualy')}}">Manual Booking</a></li>
<!--                                             <li><a href="booking-config.html">Config time Slot</a></li>
 -->                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                           <div class="card" id="calendars">
                                                    <h4 class="card-header">User details</h4>
                                                    <div class="card-body">
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Full Name</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->full_name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->email }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Phone No</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->contact_no }}</p>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Event</label>
                                                                    <div class="col-sm-10">
                                                                        <p>
                                                                            {{ $booking_details[0]->event_name }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Start Date</label>
                                                                    <div class="col-sm-10">
                                                                        <p>
                                                                            {{ site_date_name($booking_details[0]->start_date) }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">End Date</label>
                                                                    <div class="col-sm-10">
                                                                        <p>
                                                                            {{ site_date_name($booking_details[0]->end_date) }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Time Slot</label>
                                                                    <div class="col-sm-8">
                                                                        <p>
                                                                            @if($booking_details[0]->shift == '0') 
                                                                                Full Day
                                                                            @endif

                                                                            @if($booking_details[0]->shift == '1') 
                                                                                Morning
                                                                            @endif

                                                                            @if($booking_details[0]->shift == '2') 
                                                                                Lunch
                                                                            @endif
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                            <!-- <a href="#" class="btn btn-primary">Update</a> -->
                                                                        </div>
                                                                </div>
                                                                <!-- <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Package</label>
                                                                    <div class="col-sm-8">
                                                                        <p>
                                                                            Static Package 01
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                            <a href="#" class="btn btn-primary">Update</a>
                                                                        </div>
                                                                </div> -->
                                                                
                                                                <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-2">Guest</label>
                                                                        <div class="col-sm-10">
                                                                            <p>
                                                                                {{ $booking_details[0]->guest }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Note</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->note }}</p>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                </div>
                                                
                                        </div>
                                        
                                        
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