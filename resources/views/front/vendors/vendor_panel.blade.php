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
                        <div class="user-body-sec grid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('vendors-profile')}}">
                                            <i class="fa fa-user"></i>
                                            <h3>PROFILE</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('vendors-photos-upload')}}">
                                            <i class="fa fa-users"></i>
                                            <h3>Portfolio</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('vendors-manager')}}">
                                            <i class="fa fa-list"></i>
                                            <h3>Vendor Manager</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('vendors-inbox')}}">
                                            <span class="notice">75</span>
                                            <i class="fa fa-inbox"></i>
                                            <h3>Inbox</h3>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="grid-item">
                                        <a href="{{url('vendors-settings')}}">
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