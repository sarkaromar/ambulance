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
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    @if(isset($booking_and_users_list[0])) 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" id="calendars">
                                                <h4 class="card-header">Booked by user</h4>
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th width="5%"></th>
                                                                    <th width="10%">User Name</th>
                                                                    <th width="10%">Email</th>
                                                                    <th width="10%">Contact no</th>
                                                                    <th width="10%">Date</th>
                                                                    <th width="5%"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($booking_and_users_list as $val)
                                                                    <tr>
                                                                        <td><img width="50" src="{{URL::to('assets/images/profile.jpg')}}" alt="User image"></td>
                                                                        <td><a href="{{url::to('vendors-booking-user-details', $val->v_vendor_book_id)}}">{{ $val->cre_full_name }}</a> </td>
                                                                        <td>{{ $val->cre_email }}</td>
                                                                        <td>{{ $val->user_phone }}</td>
                                                                        <td>{{ $val->start_date }}</td>
                                                                        <td>
                                                                            <div class="float-right">
                                                                                @if($val->booking_status == '0') 
                                                                                    <span class="badge badge-warning">Painding</span>
                                                                                @endif

                                                                                @if($val->booking_status == '1') 
                                                                                    <span class="badge badge-success">Confirm</span>
                                                                                @endif
                                                                                <a href="{{url::to('vendors-booking-user-details', $val->v_vendor_book_id)}}" class="btn btn-info">Details</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" id="calendars">
                                                <h4 class="card-header">Event Calendar</h4>
                                                <div class="card-body">
                                                    <div id='calendar3'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="alert alert-warning">
                                                <strong>Sorry!</strong> There is no information!
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection