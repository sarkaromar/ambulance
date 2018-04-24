@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
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
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">User Name</label>
                            <div class="col-sm-10">
                                <p>{{ isset($venue_info[0]->cre_full_name) ? $venue_info[0]->cre_full_name : "please update" }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">User Email</label>
                            <div class="col-sm-6">
                                <p>{{ isset($venue_info[0]->cre_email) ? $venue_info[0]->cre_email : "please update" }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2" >Password</label>
                            <div class="col-sm-2">
                                <p>******</p>
                            </div>
                            <div class="col-sm-5">
                                <a data-toggle="modal" href="#change_password" >Change your Password</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Account status</label>
                            @if(isset($venue_info[0]->cre_status) && $venue_info[0]->cre_status == '1')
                            <div class="col-sm-2">
                                    <p class="alert alert-success"> Active </p>
                            </div>
                            @endif

                            @if(isset($venue_info[0]->cre_status) && $venue_info[0]->cre_status == '0')
                            <div class="col-sm-2">
                                    <p class="alert alert-danger"> inactive </p>
                            </div>
                            @endif

                            @if(isset($venue_info[0]->cre_status) && $venue_info[0]->cre_status == '2')
                            <div class="col-sm-2">
                                    <p class="alert alert-danger"> Review </p>
                            </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Package/Plan</label>
                            <div class="col-sm-2">
                                <p class="alert alert-primary">{{ isset($venue_info[0]->subs_pak_name) ? "$venue_info[0]->subs_pak_name" : "please update" }}</p>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-info btn-lg" data-toggle="modal" href="#upgrade" >Upgrade</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2">Payment History</label>
                            <div class="col-sm-10">
                                @if(isset($subscription_payments[0]))
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Account no</th>
                                            <th>Transfer ID</th>
                                            <th>Transfer Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subscription_payments as $payment)
                                            <tr>
                                                <td>{{$payment->v_subs_payment_date}}</td>
                                                <td>{{$payment->v_subs_payment_acc_no}}</td>
                                                <td>{{$payment->v_subs_payment_trans_id}}</td>
                                                <td>{{$payment->v_subs_payment_amount}}TK</td>
                                                <td>
                                                    @if($payment->v_subs_payment_status == '0')
                                                        <span class="badge badge-secondary">Panding</span>
                                                    @endif

                                                    @if($payment->v_subs_payment_status == '1')
                                                        <span class="badge badge-success">Confirm</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="alert alert-warning">
                                    <strong>Sorry!</strong> There is no history!
                                </div>                                      
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--plan upgrade modal start-->
                <div id="upgrade" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('plan-upgrade') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h5 class="modal-title">Package/Plan Upgrade</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <select class="form-control" name="active_subs_pak_id" required>
                                            <option value="">Choose your plan</option>
                                            @if(isset($all_pak))
                                            @foreach($all_pak as $pak)
                                            <option value="{{$pak->subs_pak_id}}_{{$pak->subs_period}}">{{$pak->subs_pak_name}} ( {{$pak->subs_pak_facility}} ) ( {{$pak->subs_period}}Month ) ( {{$pak->subs_pak_price}}TK ) </option>
                                            @endforeach
                                            @endif
                                        </select>
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
                <!--plan upgrade  modal end -->

                <!--password change modal start-->
                <div id="change_password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('password-update') }}" method="POST">
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