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
                                <h4 class="card-header">Account settings</h4>
                                <div class="card-body">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2">User Name</label>
                                <div class="col-sm-10">
                                    <p>{{ $user_info[0]->cre_full_name}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2">User Email</label>
                                <div class="col-sm-6">
                                    <p>{{ $user_info[0]->cre_email}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2">Password</label>
                                <div class="col-sm-2">
                                    <p>******</p>
                                </div>
                                <div class="col-sm-5">
                                    <a data-toggle="modal" href="#change_password">Change your Password</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2">Account status</label>
                                <div class="col-sm-2">
                                    @if($user_info[0]->cre_status == 0)
                                    <p class="alert alert-warning"> Panding </p>
                                    @elseif($user_info[0]->cre_status == 1)
                                    <p class="alert alert-success"> Active </p>
                                    @else
                                    <p class="alert alert-danger"> Inactive </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>

                    <!--password change modal start-->
                    <div id="change_password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('user-password-update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title">Password Change</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label  class="col-sm-3  col-form-label">New Password</label>
                                            <input type="password" name="new_password" class="form-control" id="exampleFormControlInput1" placeholder="Enter New Password">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3  col-form-label">Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Confirm Password">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--password change modal end -->

                </div>
            </div>
        </div>
    </section>
@endsection