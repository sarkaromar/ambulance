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
                                            <!-- <li><a href="booking-config.html">Config time Slot</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if(!isset($booking_and_users_list))
                                            <div class="alert alert-danger">
                                                <strong>Sorry!</strong> Invalid Details!
                                            </div>
                                            @else
                                            <div class="card">
                                                <h4 class="card-header">Booking Request</h4>
                                                <div class="card-body">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th width="5%"></th>
                                                                <th width="10%">User Name</th>
                                                                <th width="10%">Email</th>
                                                                <th width="10%">Contact no</th>
                                                                <th width="10%">Date</th>
                                                                <th width="15%">Time Slote</th>
                                                                <th width="5%"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($booking_and_users_list as $val)
                                                            <tr>
                                                                <td>
                                                                    <img width="50" src="{{ asset($val->cre_photo != "" ? 'img/user_photo/'.$val->cre_photo : 'img/male.jpg') }}" alt="">
                                                                </td>
                                                                <td><a href="{{URL::to('booking-user-details', $val->booking_id)}}">{{ $val->cre_full_name }}</a> </td>
                                                                <td>{{ $val->cre_email }}</td>
                                                                <td>{{ $val->user_phone }}</td>
                                                                <td>{{ $val->start_date }}</td>
                                                                <td>
                                                                    @if($val->shift == '0') 
                                                                        Full Day
                                                                    @endif

                                                                    @if($val->shift == '1') 
                                                                        Morning
                                                                    @endif

                                                                    @if($val->shift == '2') 
                                                                        Lunch
                                                                    @endif

                                                                </td>
                                                                <td>
                                                                    <div class="float-right">
                                                                        @if($val->booking_status == '0') 
                                                                            <span class="badge badge-warning">Painding</span>
                                                                        @endif

                                                                        @if($val->booking_status == '1') 
                                                                            <span class="badge badge-success">Confirm</span>
                                                                        @endif
                                                                        <a href="{{url::to('booking-user-details', $val->booking_id)}}" class="btn btn-info">Details</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
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
            </div>
        </div>
    </section>
    @endsection