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
                        <div class="user-body-sec booking-manage">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="manage-nav">
                                        <h4>Vendors</h4>
                                        <ul>
                                            <li><a href="{{ URL::to('user-vendors') }}">Vendors</a></li>
                                            <li><a href="{{ URL::to('user-requested-vendors') }}">Requested Vendors</a></li>
                                            <li><a href="{{ URL::to('user-confirm-vendors') }}">Booked Vendors</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-10">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">Profile picture</label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset($vendors[0]->cre_photo != "" ? 'img/vendor_photo/'.$vendors[0]->cre_photo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo"  alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">Full Name</label>
                                        <div class="col-sm-10">
                                            <p>{{$vendors[0]->cre_full_name}}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">Vendor type</label>
                                        <div class="col-sm-10">
                                            <p>{{ $vendors[0]->vendor_types_name }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">Year of Exp.</label>
                                        <div class="col-sm-10">
                                            <p>{{ get_exp_month($vendors[0]->vendor_year_of_exp) }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">Minimum Rate</label>
                                        <div class="col-sm-10">
                                            <p>{{$vendors[0]->vendor_min_rate}}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">Phone</label>
                                        <div class="col-sm-10">
                                            <p>{{$vendors[0]->vendor_phone}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">Address</label>
                                        <div class="col-sm-10">
                                            <p>{{$vendors[0]->vendor_address}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2">About yourself</label>
                                        <div class="col-sm-10">
                                            <p>{{$vendors[0]->vendor_about}}</p>
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