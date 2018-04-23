@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
    <div class="venue-panel">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-lg-2">
                    <div class="user-sec">
                        <div class="avater">
                            <a href="">
                                <img src="{{ URL::to('images/4_1.png') }}" alt="">
                            </a>
                            <div class="venue-user">
                                <h3>{{ Auth::user()->ow_name }}</h3>
                                <h4>ID: {{ Auth::user()->ow_id }}</h4>
                            </div>
                            <div class="user-menu">
                                <ul>
                                    <li><a href="{{url('my-venue')}}">My Venue</a></li>
                                    <li><a href="{{url('my-hall-list')}}">My Hall List</a></li>
                                    <li><a href="{{url('my-profile')}}">My Profile</a></li>
                                </ul>
                            </div>
                            <div class="offers">
                                <h3>Notice Section</h3> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content -->
                <div class="col-lg-10">
                    <div class="user-body-sec">
                        <div class="tab-pane fade show active" id="addnew" role="tabpanel" aria-labelledby="addnew-tab">
                            <div class="card" id="highlight-">
                                <h4 class="card-header">My Venue</h4>
                                <div class="card-body">
                                <?php if(!isset($info->id)){ ?>
                                    <h5>There is no data!</h5>
                                <?php }else { ?>
                                    <form action="{{ route('venue.update') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div id="error"></div>
                                        <div class="form-group">
                                            <label for="name">Venue Name<sup style="color: red">*</sup></label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $info->ve_name }}" placeholder="venue name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">About<sup style="color: red">*</sup></label>
                                            <textarea id="about" class="form-control" rows="5" name="about" placeholder="write about venue..." >{{ $info->ve_about }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Address<sup style="color: red">*</sup></label>
                                            <textarea id="about" class="form-control" rows="1" name="add" placeholder="address here" >{{ $info->ve_add }}</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="about">Division<sup style="color: red">*</sup></label>
                                                    <select class="form-control" id="division" name="division">
                                                        @foreach($divs as $div)
                                                        <option value="{{ $div->id}}" <?php if($info->ve_division == $div->id){ echo "selected";} ?> >{{ $div->di_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="about">Area<sup style="color: red">*</sup></label>
                                                    <select class="form-control" id="area" name="area">
                                                        <option value="<?=$default_area->id?>"><?=$default_area->ar_name?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="about">Opening Time<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="open" required>
                                                        <option value="06.00 AM" <?php if('06.00 AM' == $info->ve_open){ echo "selected";} ?> >06.00 AM</option>
                                                        <option value="07.00 AM" <?php if('07.00 AM' == $info->ve_open){ echo "selected";} ?>>07.00 AM</option>
                                                        <option value="08.00 AM" <?php if('08.00 AM' == $info->ve_open){ echo "selected";} ?>>08.00 AM</option>
                                                        <option value="09.00 AM" <?php if('09.00 AM' == $info->ve_open){ echo "selected";} ?>>09.00 AM</option>
                                                        <option value="10.00 AM" <?php if('10.00 AM' == $info->ve_open){ echo "selected";} ?>>10.00 AM</option>
                                                        <option value="11.00 AM" <?php if('11.00 AM' == $info->ve_open){ echo "selected";} ?>>11.00 AM</option>
                                                        <option value="12.00 PM" <?php if('12.00 PM' == $info->ve_open){ echo "selected";} ?>>12.00 PM</option>
                                                        <option value="01.00 PM" <?php if('01.00 PM' == $info->ve_open){ echo "selected";} ?>>01.00 PM</option>
                                                        <option value="02.00 PM" <?php if('02.00 PM' == $info->ve_open){ echo "selected";} ?>>02.00 PM</option>
                                                        <option value="03.00 PM" <?php if('03.00 PM' == $info->ve_open){ echo "selected";} ?>>03.00 PM</option>
                                                        <option value="04.00 PM" <?php if('04.00 PM' == $info->ve_open){ echo "selected";} ?>>04.00 PM</option>
                                                        <option value="05.00 PM" <?php if('05.00 PM' == $info->ve_open){ echo "selected";} ?>>05.00 PM</option>
                                                        <option value="06.00 PM" <?php if('06.00 PM' == $info->ve_open){ echo "selected";} ?>>06.00 PM</option>
                                                        <option value="07.00 PM" <?php if('07.00 PM' == $info->ve_open){ echo "selected";} ?>>07.00 PM</option>
                                                        <option value="08.00 PM" <?php if('08.00 PM' == $info->ve_open){ echo "selected";} ?>>08.00 PM</option>
                                                        <option value="09.00 PM" <?php if('09.00 PM' == $info->ve_open){ echo "selected";} ?>>09.00 PM</option>
                                                        <option value="10.00 PM" <?php if('10.00 PM' == $info->ve_open){ echo "selected";} ?>>10.00 PM</option>
                                                        <option value="11.00 PM" <?php if('11.00 PM' == $info->ve_open){ echo "selected";} ?>>11.00 PM</option>
                                                        <option value="12.00 PM" <?php if('12.00 PM' == $info->ve_open){ echo "selected";} ?>>12.00 PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="about">Closing Time<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="close" required>
                                                        <option value="06.00 AM" <?php if('06.00 AM' == $info->ve_close){ echo "selected";} ?>>06.00 AM</option>
                                                        <option value="07.00 AM" <?php if('07.00 AM' == $info->ve_close){ echo "selected";} ?>>07.00 AM</option>
                                                        <option value="08.00 AM" <?php if('08.00 AM' == $info->ve_close){ echo "selected";} ?>>08.00 AM</option>
                                                        <option value="09.00 AM" <?php if('09.00 AM' == $info->ve_close){ echo "selected";} ?>>09.00 AM</option>
                                                        <option value="10.00 AM" <?php if('10.00 AM' == $info->ve_close){ echo "selected";} ?>>10.00 AM</option>
                                                        <option value="11.00 AM" <?php if('11.00 AM' == $info->ve_close){ echo "selected";} ?>>11.00 AM</option>
                                                        <option value="12.00 PM" <?php if('12.00 PM' == $info->ve_close){ echo "selected";} ?>>12.00 PM</option>
                                                        <option value="01.00 PM" <?php if('01.00 PM' == $info->ve_close){ echo "selected";} ?>>01.00 PM</option>
                                                        <option value="02.00 PM" <?php if('02.00 PM' == $info->ve_close){ echo "selected";} ?>>02.00 PM</option>
                                                        <option value="03.00 PM" <?php if('03.00 PM' == $info->ve_close){ echo "selected";} ?>>03.00 PM</option>
                                                        <option value="04.00 PM" <?php if('04.00 PM' == $info->ve_close){ echo "selected";} ?>>04.00 PM</option>
                                                        <option value="05.00 PM" <?php if('05.00 PM' == $info->ve_close){ echo "selected";} ?>>05.00 PM</option>
                                                        <option value="06.00 PM" <?php if('06.00 PM' == $info->ve_close){ echo "selected";} ?>>06.00 PM</option>
                                                        <option value="07.00 PM" <?php if('07.00 PM' == $info->ve_close){ echo "selected";} ?>>07.00 PM</option>
                                                        <option value="08.00 PM" <?php if('08.00 PM' == $info->ve_close){ echo "selected";} ?>>08.00 PM</option>
                                                        <option value="09.00 PM" <?php if('09.00 PM' == $info->ve_close){ echo "selected";} ?>>09.00 PM</option>
                                                        <option value="10.00 PM" <?php if('10.00 PM' == $info->ve_close){ echo "selected";} ?>>10.00 PM</option>
                                                        <option value="11.00 PM" <?php if('11.00 PM' == $info->ve_close){ echo "selected";} ?>>11.00 PM</option>
                                                        <option value="12.00 PM" <?php if('12.00 PM' == $info->ve_close){ echo "selected";} ?>>12.00 PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Logo<sup style="color: red">*</sup></label>
                                            <input class="form-control" type="file" name="logo">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ URL::to('images/venue/logo/', $info->ve_logo ) }}" alt="{{ $info->ve_name }}" width="60px">
                                            <input type="hidden" name="old_logo" value="{{ $info->ve_logo}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Other Image's</label>
                                            <input class="form-control" type="file" name="images[]" multiple="">
                                        </div>
                                        <div class="form-group">
                                            @foreach($img_lists as $img_list)
                                                <img src="{{ URL::to('images/venue/', $img_list->ve_image ) }}" alt="{{ $info->ve_name }}" width="80px" style="margin-right: 5px">
                                                <input type="hidden" name="old_images[]" value="{{ $img_list->ve_image }}">
                                            @endforeach
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                    </form>
                                    <?php } ?>
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