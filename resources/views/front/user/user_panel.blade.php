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
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('user-profile')}}">
                                            <i class="fa fa-user"></i>
                                            <h3>PROFILE</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('user-venue')}}">
                                            <i class="fa fa-building"></i>
                                            <h3>Venue</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('user-vendors')}}">
                                            <i class="fa fa-users"></i>
                                            <h3>Vendors</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('user-inbox')}}">
                                            <span class="notice">75</span>
                                            <i class="fa fa-inbox"></i>
                                            <h3>Inbox</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('user-settings')}}">
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