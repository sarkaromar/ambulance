@extends('front.layouts.template')

@section('content')

<!-- mainbody section -->
    <section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.user.left_menu_user')
                    </div>
                    <div class="col-lg-10">
                        <div class="user-body-sec grid">
                                <div class="card">
                                        <h4 class="card-header">Message Details</h4>
                                        <div class="card-body">
                            <div class="mail">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>From: {{ $msg_details[0]->send_from }} </h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Date: {{ $msg_details[0]->datetime }}</h5> <!-- 12-12-2018::12:00PM -->
                                    </div>
                                </div>
                                <h5>Subject:</h5>
                                <p>{{ $msg_details[0]->subject }}.</p>
                                
                                <h5>Message:</h5>
                                <p>
                                    <span>{{ $msg_details[0]->msg_body }}</span>
                                </p>
                                <br>
                                <a href="{{ URL::to('user-inbox') }}">Back to the inbox</a>
                                
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