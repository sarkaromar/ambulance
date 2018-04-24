@extends('front.layouts.template')

@section('content')
<!-- section -->
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
                            <label for="staticEmail" class="col-sm-2">Venue Logo</label>
                            <div class="col-sm-2">
                                <img width="100%" src="{{ asset(isset($info->ve_logo) ? 'img/venue_photo/logo/'.$info->ve_logo : 'img/logo.png') }}" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Venue Type</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->id) ? get_venue_type_name_by_venue_id("$info->id") : 'please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Venue Email</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_email) ? "$info->ve_email" : "please update" }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Venue Name</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_name) ? "$info->ve_name" : "please update" }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Opening Time</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_open) ? get_time_name_by_time_id("$info->ve_open") : 'please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Closing Time</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_close) ? get_time_name_by_time_id("$info->ve_close") : 'please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Calender Show ?</label>
                            <div class="col-sm-10">
                                <p>
                                    <?php if(isset($info->ve_front_calender) && $info->ve_front_calender == 0){ 
                                        echo "No";
                                    }else{
                                        echo "Yes";
                                    } ?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Phone No</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_phn) ? "$info->ve_phn" : "please update" }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Divisions</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_division) ? get_division_name_by_division_id($info->ve_division) : 'please update' }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Area</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_area) ? get_area_name_by_area_id($info->ve_area) : "please update" }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Address</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_add) ? "$info->ve_add" : "please update" }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">About Venue</label>
                            <div class="col-sm-10">
                                <p>{{ isset($info->ve_about) ? "$info->ve_about" : "please update" }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2"></label>
                            <div class="col-sm-10">
                                <a href="{{url('venue-update')}}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection