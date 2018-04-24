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
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2"></label>
                            <div class="col-sm-10">
                                <img width="199" height="199" src="{{ asset($cre_info->cre_photo != "" ? 'img/profile_photo/'.$cre_info->cre_photo : 'img/male.jpg') }}" alt="">
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
                                <p>{{ isset($owner_info->ow_phone) ? $owner_info->ow_phone : 'Please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Division</label>
                            <div class="col-sm-10">
                                <p>{{ isset($owner_info->ow_divi_id) ? get_division_name_by_division_id($owner_info->ow_divi_id) : 'Please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Area</label>
                            <div class="col-sm-10">
                                <p>{{ isset($owner_info->ow_area_id) ? get_area_name_by_area_id($owner_info->ow_area_id) : 'Please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Address</label>
                            <div class="col-sm-10">
                                <p>{{ isset($owner_info->ow_address) ? $owner_info->ow_address : 'Please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">About yourself</label>
                            <div class="col-sm-10">
                                <p>{{ isset($owner_info->ow_about) ? $owner_info->ow_about : 'Please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2"></label>
                                <div class="col-sm-10">
                                    <a href="{{route('profile.update')}}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection