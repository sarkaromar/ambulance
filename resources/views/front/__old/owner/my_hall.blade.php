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
                        @if($venue_info > 0)
                        <a class="btn btn-success" href="{{url('/add-hall')}}">Add Hall</a> <br> <hr>
                        @else
                        <div class="tab-pane fade show active" id="addnew" role="tabpanel" aria-labelledby="addnew-tab">
                            <div class="card" id="highlight-">
                                <h4 class="card-header">My Hall List</h4>
                                <div class="card-body">
                                    <h5>There is no venue information!</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="venue-list">    
                            @foreach($lists as $list)                    
                            <div class="venues">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ URL::to('images/hall/', $list->ha_m_image ) }}" alt="{{ $list->ha_name }}">
                                    </div>
                                    <div class="col-lg-8">
                                        <h3>{{ $list->ha_name }} | <i class="fa fa-gift"></i> Package / person from TK {{ $list->ha_gst_min_rate }}</h3>
                                        <p><i class="fa fa-tag"></i>  Bachelor Party, Engagement, Birthday (static)</p>
                                        <div class="fecilitys">
                                            <ul>
                                                <li><i class="fa fa-car"></i> CAR Parking</i></li>
                                                <li><i class="fa fa-snowflake-o" aria-hidden="true"></i> AC</i></li>
                                                <li><i class="fa fa-university" aria-hidden="true"></i> <i class="fa fa-cutlery" aria-hidden="true"></i> Hall & Food</i></li>
                                                <li><i class="fa fa-glass" aria-hidden="true"></i> Bar</i></li>
                                                <li><i class="fa fa-users"> 500</i></li>
                                                <li><i class="fa fa-wheelchair" aria-hidden="true"></i> DA</i></li>
                                                <li><i class="fa fa-wifi" aria-hidden="true"></i> WIFI</i></li>
                                                <li>(static)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{ url('/edit-hall/'. $list->id ) }}"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ url('/my-booking/'. $list->id ) }}" data-toggle="tooltip" title="Booking Calendar"><i class="fa fa-calendar fa-lg"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ url('/delete-hall/'. $list->id ) }}" onclick="return check();" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection