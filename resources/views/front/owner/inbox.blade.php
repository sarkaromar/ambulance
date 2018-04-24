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
                            @if(isset($msg_list))
                            <div class="alert alert-danger">
                                <strong>Sorry!</strong> Invalid Details!
                            </div>
                            @else
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
                                        <td>{{ $msg->datetime }}</td>
                                        <td>{{ $msg->send_from }}</td>
                                        <td><a href="{{ URL::to('inbox-details', $msg->msg_id) }}">{{ $msg->subject }}</a></td>
                                        <td>
                                            <div class="float-right">
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                <a href="{{ URL::to('inbox-details', $msg->msg_id) }}">
                                                    <button type="button" class="btn btn-success btn-sm">Read</button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection