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
                                <label for="staticEmail" class="col-sm-2  col-form-label"></label>
                                <div class="col-sm-2">
                                    <img src="{{ asset($venue->ve_logo != "" ? 'img/profile_photo/'.$venue->ve_logo : 'img/male.jpg') }}" width="199" height="199" id="profile_photo" alt="">
                                    <input type="hidden" name="profile_photo" class="profile_photo">
                                    <input type="file" onchange="readURL(this, 'fa');" name="MyFile" class="form-control" placeholder="Change image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2  col-form-label">Venue Name</label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="venue_id" value="{{$venue->id}}"/>
                                    <input type="text" name="name" value="{{$venue->ve_name}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter venue name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" value="{{$venue->ve_email}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Phone No</label>
                                <div class="col-sm-6">
                                    <input type="text" name="phone" value="{{$venue->ve_phn1}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Emargency No</label>
                                <div class="col-sm-6">
                                    <input type="text" name="emargency_no" value="{{$venue->ve_emargency_no}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Venue Address</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="address" id="" cols="30" rows="5">{{$venue->ve_add}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">About Venue</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="about" id="" cols="30" rows="6">{{$venue->ve_about}}</textarea>
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