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
                            <div class="card" id="facilities">
                                <h4 class="card-header">Profile</h4>
                                <div class="card-body">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Profile picture</label>
                                    <div class="col-sm-10">
                                        <img src="{{ asset($cre_info->cre_photo != "" ? 'img/user_photo/'. $cre_info->cre_photo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo"  alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Full Name</label>
                                    <div class="col-sm-10">
                                        <p>{{$cre_info->cre_full_name}}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Email</label>
                                    <div class="col-sm-10">
                                        <p>{{$cre_info->cre_email}}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Phone No</label>
                                    <div class="col-sm-10">
                                        <p>{{ isset($user_info->user_phone) ? $user_info->user_phone : 'Please update' }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Division</label>
                                    <div class="col-sm-10">
                                        <p>{{ isset($user_info->user_divi_id) ? get_division_name_by_division_id($user_info->user_divi_id) : 'Please update' }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Area</label>
                                    <div class="col-sm-10">
                                        <p>{{ isset($user_info->user_area_id) ? get_area_name_by_area_id($user_info->user_area_id) : 'Please update' }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">Full Address</label>
                                    <div class="col-sm-10">
                                        <p>{{ isset($user_info->user_address) ? $user_info->user_address : 'Please update' }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2">About yourself</label>
                                    <div class="col-sm-10">
                                        <p>{{ isset($user_info->user_about) ? $user_info->user_about : 'Please update' }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        <a href="{{URL::to('user-profile-edit')}}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
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