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
                        <div class="user-body-sec grid">
                            <div class="" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <a class="btn btn-success" href="{{url('/add-hall')}}"><i class="fa fa-plus"></i> Add New Hall</a>
                                <br>
                                <hr>
                                <div class="venue-list">
                                @if(isset($lists[0]))
                                @foreach($lists as $list)  
                                <div class="venues">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="{{ URL::to('img/hall_photo/', $list->ha_m_image) }}" alt="{{ $list->ha_name }}">
                                        </div>
                                        <div class="col-lg-8">
                                            <h3>{{ $list->ha_name }} | <i class="fa fa-gift"></i> Package / person from TK {{ $list->ha_gst_min_rate }}</h3>
                                            <p><i class="fa fa-map-marker"></i> {{ $venue_info[0]->ve_add }}</p>
                                            <p><i class="fa fa-tag"></i>  Bachelor Party, Engagement, Birthday</p>
                                            <div class="fecilitys">
                                                <ul>
                                                    <li><i class="fa fa-car"></i> CAR Parking</i></li>
                                                    <li><i class="fa fa-snowflake-o" aria-hidden="true"></i> AC</i></li>
                                                    <li><i class="fa fa-university" aria-hidden="true"></i> <i class="fa fa-cutlery" aria-hidden="true"></i> Hall & Food</i></li>
                                                    <li><i class="fa fa-glass" aria-hidden="true"></i> Bar</i></li>
                                                    <li><i class="fa fa-users"> 500</i></li>
                                                    <li><i class="fa fa-wheelchair" aria-hidden="true"></i> DA</i></li>
                                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> WIFI</i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="{{ URL::to('my-hall-details', $list->ha_slug) }}" class="btn btn-info btn-block">Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                    @else
                                <div class="alert alert-success">
                                    <strong>Sorry!</strong> There is no list
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