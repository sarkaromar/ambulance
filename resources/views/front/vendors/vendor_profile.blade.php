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
                            <div class="card" id="facilities">
                                <h4 class="card-header">Profile</h4>
                                <div class="card-body">
                                @if (Session::has('error'))
                                <div class="alert alert-danger"><strong>Sorry!</strong> {{Session::get('error')}}</div>
                                @endif
                                @if (Session::has('success'))
                                <div class="alert alert-success"><strong>Thanks!</strong> {{Session::get('success')}}</div>
                                @endif
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Profile picture</label>
                                    <div class="col-sm-10">
                                        <img src="{{ asset($profile[0]->cre_photo != "" ? 'img/vendor_photo/'.$profile[0]->cre_photo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo"  alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Full Name</label>
                                    <div class="col-sm-10">
                                        <p>{{$profile[0]->cre_full_name}}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Vendor type</label>
                                    <div class="col-sm-10">
                                        <p>{{ $vendor_name->vendor_types_name }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Year of Exp.</label>
                                    <div class="col-sm-10">
                                        <p>{{ get_exp_month($profile[0]->vendor_year_of_exp) }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Minimum Rate</label>
                                    <div class="col-sm-10">
                                        <p>{{ $profile[0]->vendor_min_rate != '0' ? $profile[0]->vendor_min_rate : 'Please update' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Phone</label>
                                    <div class="col-sm-10">
                                        <p>{{ isset($profile[0]->vendor_phone) ? $profile[0]->vendor_phone : 'Please update' }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Address</label>
                                    <div class="col-sm-10">
                                        <p>{{$profile[0]->vendor_address}} , {{ $area_name->ar_name }} , {{ $divi_name->di_name }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">About yourself</label>
                                    <div class="col-sm-10">
                                        <p>{{ isset($profile[0]->vendor_about) ? $profile[0]->vendor_about : 'Please update' }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        <a href="{{URL::to('vendors-profile-edit')}}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
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