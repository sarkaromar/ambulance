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
                    <form enctype="multipart/form-data" action="{{route('venue.update.save')}}" method="post">
                        {{ csrf_field() }}
                        <div class="user-body-sec grid">
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label"></label>
                                <div class="col-sm-2">
                                    <img src="{{ asset(isset($info->ve_logo) ? 'img/venue_photo/logo/'.$info->ve_logo : 'img/logo.png') }}" width="199" height="199" id="profile_photo" alt="">
                                    <input type="hidden" name="old_image" value="{{ isset($info->ve_logo) ? $info->ve_logo : '' }}">
                                    <input type="hidden" name="image" class="profile_photo">
                                    <input type="file" onchange="readURL(this, 'fa');" name="image" class="form-control" placeholder="Change image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Venue Type</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="ve_type" required>
                                        <option value="">Please Select...</option>
                                        @foreach($venue_types as $type)
                                        <option value="{{$type->venue_type_id}}" <?php if(isset($info->ve_type) && $type->venue_type_id == $info->ve_type){ echo "selected";} ?>>{{$type->venue_type_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Venue Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="ve_name" value='{{ isset($info->ve_name) ? "$info->ve_name" : "" }}' class="form-control" placeholder="Enter your venue name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2  col-form-label">Venue Email</label>
                                <div class="col-sm-6">
                                    <input type="text" name="ve_email" value='{{ isset($info->ve_email) ? "$info->ve_email" : "" }}' class="form-control" placeholder="Enter your venue email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Opening Time</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="ve_open" required>
                                        <option value="">Please Select...</option>
                                        @foreach($time_lists as $time)
                                        <option value="{{ $time->time_id }}" <?php if(isset($info->ve_open) && $info->ve_open == $time->time_id){ echo "selected";} ?>>{{$time->time_name}}</option>
                                        @endforeach                                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Closing time</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="ve_close" required>
                                        <option value="">Please Select...</option>
                                        @foreach($time_lists as $time)
                                        <option value="{{ $time->time_id }}" <?php if(isset($info->ve_close) && $info->ve_close == $time->time_id){ echo "selected";} ?>>{{$time->time_name}}</option>
                                        @endforeach                                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Calender Show ?</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label><input type="radio" name="ve_front_calender" value="1" required  <?php if(isset($info->ve_front_calender) && $info->ve_front_calender == 1){ echo "checked";} ?> > Yes</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="ve_front_calender" value="0" required <?php if(isset($info->ve_front_calender) && $info->ve_front_calender == 0){ echo "checked";} ?> > No</label>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Venue Phone No</label>
                                <div class="col-sm-6">
                                    <input type="text" name="ve_phn" value='{{ isset($info->ve_phn) ? "$info->ve_phn" : "" }}' class="form-control" placeholder="venue phone number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Division<sup style="color: red">*</sup></label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="address_division" name="ve_division" required>
                                        <option value=""> Please Select...</option>
                                        @if(isset($divis[0]))
                                        @foreach($divis as $div)
                                        <option value="{{ $div->id }}"<?php if(isset($info->ve_division) && $div->id == $info->ve_division){echo "selected";}?> >{{ $div->di_name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div id="error"></div>
                                <label class="col-sm-2 col-form-label">Area<sup style="color: red">*</sup></label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="address_area" name="ve_area" required>
                                        <option value=""> Please Select...</option>
                                        @if(isset($area_list[0]))
                                        @foreach($area_list as $area)
                                        <option value="{{ $area->id }}" <?php if($area->id == $info->ve_area ){echo "selected";}?>>{{ $area->ar_name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="ve_add" rows="2" required>{{ isset($info->ve_add) ? "$info->ve_add" : "" }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">About Venue</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="ve_about" rows="5" required>{{ isset($info->ve_about) ? "$info->ve_about" : "" }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function readURL(input, param) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#profile_photo').attr('src', e.target.result);
            $('.profile_photo').val(e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection