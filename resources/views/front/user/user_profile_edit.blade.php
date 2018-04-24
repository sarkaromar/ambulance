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
                        <form enctype="multipart/form-data" action="{{route('user-profile-update')}}" method="post">
                        {{ csrf_field() }}
                            <div class="user-body-sec grid">
                                <div class="row">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label"></label>
                                    <div class="col-sm-2">
                                        <img src="{{ asset($cre_info->cre_photo != "" ? 'img/user_photo/'.$cre_info->cre_photo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo" alt="">
                                        <input type="hidden" name="profile_photo" class="profile_photo" required>
                                        <input type="file" onchange="readURL(this, 'fa');" name="MyFile" class="form-control" placeholder="Change image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label">Full Name<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="cre_full_name" class="form-control" value="{{$cre_info->cre_full_name}}" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <input type="email" name="cre_email" value="{{$cre_info->cre_email}}" class="form-control" placeholder="e.g. name@example.com" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Phone No<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="user_phone" value="{{ isset($user_info->user_phone) ? $user_info->user_phone : '' }}" class="form-control" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Division<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="address_division" name="user_divi_id" required>
                                            <option value=""> Please Select...</option>
                                            @if(isset($divis[0]))
                                            @foreach($divis as $div)
                                            <option value="{{ $div->id }}"<?php if(isset($user_info->user_divi_id) && $div->id == $user_info->user_divi_id){echo "selected";}?> >{{ $div->di_name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div id="error"></div>
                                    <label class="col-sm-2 col-form-label">Area<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="address_area" name="user_area_id" required>
                                            <option value=""> Please Select...</option>
                                            @if(isset($area_list[0]))
                                            @foreach($area_list as $area)
                                            <option value="{{ $area->id }}" <?php if($area->id == $user_info->user_area_id ){echo "selected";}?>>{{ $area->ar_name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Full Address<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="user_address" rows="5" placeholder="write here..." required>{{ isset($user_info->user_address) ? $user_info->user_address : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">About yourself</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="user_about" rows="6" placeholder="write here...">{{ isset($user_info->user_about) ? $user_info->user_about : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2"></label>
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