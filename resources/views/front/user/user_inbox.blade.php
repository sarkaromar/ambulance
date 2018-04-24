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
                                <h4 class="card-header">Inbox</h4>
                                <div class="card-body">
                                    @if(isset($msg_list[0]))
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th width="10%">Date</th>
                                                <th width="15%">From</th>
                                                <th width="50%">Subject</th>
                                                <th width="25%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($msg_list as $msg) 
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox">
                                                    </div>
                                                </td>
                                                <td>{{ site_date_name($msg->datetime) }}</td>
                                                <td>{{ $msg->send_from }}</td>
                                                <td><a href="{{ URL::to('user-inbox-details', $msg->msg_id) }}">{{ $msg->subject }}</a></td>
                                                <td>
                                                    <div class="float-right">
                                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                        <a href="{{ URL::to('user-inbox-details', $msg->msg_id) }}">
                                                            <button type="button" class="btn btn-success btn-sm">Read</button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="alert alert-warning">
                                                <strong>Sorry!</strong> There is no information!
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection