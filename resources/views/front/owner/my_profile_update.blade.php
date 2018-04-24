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
                    <form enctype="multipart/form-data" action="{{route('profile.update.save')}}" method="post">
                        {{ csrf_field() }}
                    <div class="user-body-sec grid">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2  col-form-label"></label>
                            <div class="col-sm-2">
                                <img src="{{ asset($cre_info->cre_photo != "" ? 'img/profile_photo/'.$cre_info->cre_photo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo" alt="">
                                <input type="hidden" name="profile_photo" class="profile_photo">
                                <input type="file" onchange="readURL(this, 'fa');" name="MyFile" class="form-control" placeholder="Change image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2  col-form-label">Full Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="cre_full_name" value="{{ isset($cre_info->cre_full_name) ? $cre_info->cre_full_name : '' }}" class="form-control" placeholder="Enter your full name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Phone No</label>
                            <div class="col-sm-6">
                                <input type="text" name="ow_phone" value="{{ isset($owner_info->ow_phone) ? $owner_info->ow_phone : '' }}" class="form-control"  placeholder="Enter your phone number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Division<sup style="color: red">*</sup></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="address_division" name="ow_divi_id" required>
                                    <option value=""> Please Select...</option>
                                    @if(isset($divis[0]))
                                    @foreach($divis as $div)
                                    <option value="{{ $div->id }}"<?php if(isset($owner_info->ow_divi_id) && $div->id == $owner_info->ow_divi_id){echo "selected";}?> >{{ $div->di_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div id="error"></div>
                            <label class="col-sm-2 col-form-label">Area<sup style="color: red">*</sup></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="address_area" name="ow_area_id" required>
                                    <option value=""> Please Select...</option>
                                    @if(isset($area_list[0]))
                                    @foreach($area_list as $area)
                                    <option value="{{ $area->id }}" <?php if($area->id == $owner_info->ow_area_id ){echo "selected";}?>>{{ $area->ar_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Full Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="ow_address" rows="2" placeholder="write here..." required>{{ isset($owner_info->ow_address) ? $owner_info->ow_address : '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">About yourself</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="ow_about" rows="6" placeholder="write here...">{{ isset($owner_info->ow_about) ? $owner_info->ow_about : '' }}</textarea>
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