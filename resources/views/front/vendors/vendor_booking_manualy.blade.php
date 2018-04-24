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
                                            <!-- <li><a href="booking-config.html">Config time Slot</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <h4 class="card-header">Menual Booking</h4>
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('vendors-do-booking') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <!-- <pre>{{print_r($venues)}}</pre> -->
                                                        <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">Hall</label>
                                                                <div class="col-sm-6">
                                                                <select class="form-control" name="hall_id">
                                                                    @foreach($venues as $ve)
                                                                    <option value="{{ $ve->id }}">{{ $ve->ve_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                </div>
                                                            </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-2  col-form-label">Full Name</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="user_full_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter your full name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" name="user_email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label">Contact No</label>
                                                            <div class="col-sm-6">
                                                                    <input type="text" name="user_phone" class="form-control" id="exampleFormControlInput1" placeholder="Contact no">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label">Event</label>
                                                            <div class="col-sm-6">
                                                            <select class="form-control" name="event_name">
                                                                @foreach ($events as $event)
                                                                <option value="{{ $event->ev_name }}">{{ $event->ev_name }}</option>
                                                                @endforeach
                                                                
                                                            </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label">Event Date</label>
                                                            <div class="col-sm-6">
                                                            <input id="datepicker" class="form-control" type="text" placeholder="select date" name="event_date" required />
                                                            </div>
                                                        </div>


                                                        
                                                        <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">Time Slot</label>
                                                                <div class="col-sm-6">
                                                            <select class="form-control" name="shift">
                                                                <option value="0">Full Day</option>
                                                                <option value="1">Morning Session - Lunch</option>
                                                                <option value="2">Evening Session - Dinner</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label">Note</label>
                                                            <div class="col-sm-6">
                                                               <textarea class="form-control" name="note" id="" cols="30" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                                                            <div class="col-sm-6">
                                                               <button class="btn  btn-success btn-lg" type="submit">Book</button>
                                                            </div>
                                                        </div>
                                                    </form>
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