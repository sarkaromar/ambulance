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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card" id="highlight-">
                            <h4 class="card-header">Your Profile
                                <div class="pull-right">
                                    <button class="btn btn-success btn-sm" data-toggle="modal" href="#password" title="update password"><i class="fa fa-key" aria-hidden="true"></i> Password</button>
                                </div>
                            </h4>
                            <div class="card-body">
                                <form action="{{ route('profile.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->ow_name }}" placeholder="e.g. Mostafijur Rahman" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email"  name="email" value="{{ Auth::user()->ow_email }}" placeholder="example@gmail.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone"  name="phone" value="{{ Auth::user()->ow_phone }}" placeholder="e.g. 016 123456789" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea id="about" class="form-control" rows="5" name="about" placeholder="write about yourself..." >{{ Auth::user()->ow_about }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </form>
                            </div>
                        </div>
                        <!--password-->
                        <div id="password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('profile.pass_update') }}">
                                        {{ csrf_field() }}
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title">Update Password</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="control-label mb-10">old Password:<sup style="color: red">*</sup></label>
                                                <input type="text" class="form-control" name="old_password" placeholder="old password" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10">Password:<sup style="color: red">*</sup></label>
                                                <input type="text" class="form-control" name="password" placeholder="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10">Confirm Password:<sup style="color: red">*</sup></label>
                                                <input type="text" class="form-control" name="confirm_epassword" placeholder="confirm password" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success  btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                        </div>
                                    </form>
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