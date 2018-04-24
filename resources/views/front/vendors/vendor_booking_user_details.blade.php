@extends('front.layouts.template')

@section('content')

<!-- mainbody section -->
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
                                        <h4>Booking Manage</h4>
                                        <ul>
                                            <li><a href="{{url('vendors-booking-manager')}}">Booking status</a></li>
                                            <li><a href="{{url('vendors-booking-request')}}">Booking Request</a></li>
                                            <!-- <li><a href="{{url('vendors-booking-manualy')}}">Manual Booking</a></li> -->
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
                                                                    <label for="staticEmail" class="col-sm-2">Profile picture</label>
                                                                    <div class="col-sm-10">
                                                                        <!-- <img src="{{URL::to('assets/images/profile.jpg')}}" alt=""> -->
                                                                        <img src="{{ asset($booking_details[0]->cre_photo != "" ? 'img/user_photo/'.$booking_details[0]->cre_photo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo"  alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Full Name</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->cre_full_name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Email</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->cre_email }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Phone No</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->user_phone }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Full Address</label>
                                                                    <div class="col-sm-10">
                                                                        <p>
                                                                            {{ $booking_details[0]->user_address }}, 
                                                                            {{ $booking_details[0]->user_city }}
                                                                            {{ $booking_details[0]->user_zip }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2">Note</label>
                                                                    <div class="col-sm-10">
                                                                        <p>{{ $booking_details[0]->note }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-2"></label>
                                                                        <div class="col-sm-10">
                                                                            <a href="{{ URL::to('vendors-booking-confirm', $booking_details[0]->v_vendor_book_id) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Book Confirm</a>
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