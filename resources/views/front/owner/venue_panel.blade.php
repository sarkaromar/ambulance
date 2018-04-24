@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.owner.left_menu')
                    </div>

                    <div class="col-lg-10">
                        <div class="user-body-sec grid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('my-profile')}}">
                                            <i class="fa fa-user"></i>
                                            <h3>PROFILE</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('my-venue')}}">
                                            <i class="fa fa-building"></i>
                                            <h3>My Venue</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('add-hall')}}">
                                            <i class="fa fa-plus"></i>
                                            <h3>ADD NEW Hall</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('my-hall-list')}}">
                                            <i class="fa fa-th-list"></i>
                                            <h3>My Halls</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('user-list')}}">
                                            <i class="fa fa-users"></i>
                                            <h3>User list</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('inbox')}}">
                                            <span class="notice">75</span>
                                            <i class="fa fa-inbox"></i>
                                            <h3>Inbox</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('booking-manager')}}">
                                            <span class="notice">55</span>
                                            <i class="fa fa-calendar"></i>
                                            <h3>Bookign Manager</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('settings')}}">
                                            <i class="fa fa-cogs"></i>
                                            <h3>Account Settings</h3>
                                        </a>
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