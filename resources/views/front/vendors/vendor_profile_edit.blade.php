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
                        <form enctype="multipart/form-data" action="{{route('vendors-profile-update')}}" method="post">
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
                                        <img src="{{ asset($profile[0]->cre_photo != "" ? 'img/vendor_photo/'.$profile[0]->cre_photo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo" alt="">
                                        <input type="hidden" name="profile_photo" class="profile_photo">
                                        <input type="file" onchange="readURL(this, 'fa');" name="MyFile" class="form-control" placeholder="Change image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label">Full Name<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="cre_full_name" class="form-control" value="{{$profile[0]->cre_full_name}}" id="exampleFormControlInput1" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label">Vendor type<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="vendor_type" required>
                                            <option value=""> Please Select...</option>
                                            @foreach($vendor_types as $type)
                                            <option value="{{ $type->vendor_types_id }}" <?php if($type->vendor_types_id == $profile[0]->vendor_type ){echo "selected";}?> >{{ $type->vendor_types_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label">Date of Experience<sup style="color: red">*</sup></label>    
                                    <div class="col-sm-6">
                                        <input type="text" id="exp_datepicker" class="form-control" name="vendor_year_of_exp" value="<?php if(!empty($profile[0]->vendor_year_of_exp)){ echo $profile[0]->vendor_year_of_exp; } ?>" placeholder="Please Select" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label">Minimum Rate<sup style="color: red">*</sup></label>
                                    <div class="col-sm-3">
                                        <input type="number" name="vendor_min_rate" class="form-control" value="{{$profile[0]->vendor_min_rate}}" id="exampleFormControlInput1" placeholder="Enter min rate" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Phone No<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                            <input type="text" name="vendor_phone" value="{{ $profile[0]->vendor_phone }}" class="form-control" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Division<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="address_division" name="vendor_divi_id" required>
                                            <option value=""> Please Select...</option>
                                            @foreach($divis as $div)
                                            <option value="{{ $div->id }}" <?php if($div->id == $profile[0]->vendor_divi_id ){echo "selected";}?>>{{ $div->di_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div id="error"></div>
                                    <label class="col-sm-2 col-form-label">Area<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="address_area" name="vendor_area_id" required>
                                            <option value=""> Please Select...</option>
                                            @foreach($area_list as $area)
                                            <option value="{{ $area->id }}" <?php if($area->id == $profile[0]->vendor_area_id ){echo "selected";}?>>{{ $area->ar_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Address<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="vendor_address" rows="2" placeholder="write here..." required>{{$profile[0]->vendor_address}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">About yourself<sup style="color: red">*</sup></label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="vendor_about" rows="6" placeholder="write here..." required>{{$profile[0]->vendor_about}}</textarea>
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