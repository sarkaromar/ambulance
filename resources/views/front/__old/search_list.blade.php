@extends('front.layouts.template')

@section('content')
<!-- section -->
<section class="main-body">
    <div class="container">
        <br>
        <div class="row">
            <!-- filter -->
            <div class="col-lg-4">
                <div class="filters">
                    <h2>YOUR FILTERS</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li style="list-style-type: square;">{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form" action="{{ route('venue-list') }}" method="GET">
                        <label for="type">Event Type</label>
                        <select class="form-control" name="type" id="type">
                            <option value="any">Any Event</option>
                            @if(!empty($events['0']))
                            @foreach($events as $event)
                            <option value="{{ $event->id }}" <?php if(!empty($type)){ if($event->id == $type){echo 'selected';}}?> >{{ $event->ev_name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <label for="division">Division<sup style="color:red">*</sup></label>
                        <select class="form-control" name="division" id="division" required>
                            <option value="">Please Select</option>
                            @if(!empty($divis[0]))
                            @foreach($divis as $divi)
                            <option value="{{ $divi->id }}" <?php if(!empty($division)){ if($divi->id == $division){echo 'selected';}}?> >{{ $divi->di_name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <label for="location">Area<sup style="color:red">*</sup></label>
                        <select class="form-control" name="area" id="area" required>
                            <option value="any">Any Area</option>
                            @if(!empty($areas['0']))
                            @foreach($areas as $area_info)
                            <option value="{{ $area_info->id }}" <?php if(!empty($area)){ if($area_info->id == $area){echo 'selected';}} ?> >{{ $area_info->ar_name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <label for="date">Event Date<sup style="color:red">*</sup></label>
                        <input type="text" id="datepicker" class="form-control" name="date" value="<?php if(!empty($date)){ echo $date; } ?>" placeholder="Please Select" required>
                        <label for="time">Time slot<sup style="color:red">*</sup></label>
                        <select class="form-control" name="time" id="time" required>
                            <option value="">Select Time slot</option>
                            <option value="0" <?php if(!empty($time)){ if($time == 0){echo 'selected';}} ?>>Full Day (09:00am - 10:00pm)</option>
                            <option value="1" <?php if(!empty($time)){ if($time == 1){echo 'selected';}} ?>>Morning to Lunch (09:00am - 02:00pm)</option>
                            <option value="2" <?php if(!empty($time)){ if($time == 2){echo 'selected';}} ?>>Evening to Dinner (04:00pm - 10:00pm)</option>
                        </select>
                        <label for="guest">Minimum Guest<sup style="color:red">*</sup></label>
                        <select class="form-control" name="guest" id="guest" required>
                            <option value="">Select Guests</option>
                            @if(!empty($guests['0']))
                            @foreach($guests as $guest_info)
                            <option value="{{ $guest_info->value }}" <?php if(!empty($guest)){ if($guest_info->value == $guest){echo 'selected';}} ?>>{{ $guest_info->name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <label for="budget">Minimum Budget<sup style="color:red">*</sup></label>
                        <select class="form-control" name="budget" id="budget" required>
                            <option value="">Estimated tk/per person</option>
                            @if(!empty($budgets['0']))
                            @foreach($budgets as $budget_info)
                            <option value="{{ $budget_info->value }}" <?php if(!empty($budget)){ if($budget_info->value == $budget){echo 'selected';}} ?>>{{ $budget_info->name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <br>
                        <button type="submit" class="home-continue btn btn-warning btn-block">Update Filter</button>
                    </form>
                </div>
            </div><!-- /filter col -->
            <!-- list col -->
            <div class="col-lg-8">
                <div class="venue-list">
                    @if(!empty($lists[0]))
                    @foreach ($lists as $list)
                    <div class="venues">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ URL::to('assets/images/hall/', $list->ha_m_image) }}" alt="{{ $list->ha_name }}">
                            </div>
                            <div class="col-lg-6">
                                <h3>{{ $list->ha_name }}</h3>
                                <p><i class="fa fa-map-marker"></i> {{ $list->ve_add }}</p>
                                <p><i class="fa fa-tag"></i>  Bachelor Party, Engagement, Birthday</p>
                            </div>
                            <div class="col-lg-3">
                                <h4><i class="fa fa-gift"></i> Package / person from</h4>
                                <h3>TK {{ $list->ha_gst_min_rate }}</h3>
                                <a href="{{ url('/venue-details', $list->ha_slug) }}" class="btn btn-danger btn-block">Details</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
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
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> There is no result! Please search again.
                    </div>
                    @endif
                </div> <!-- venue-list -->
            </div><!-- /list col -->
        </div>
    </div>
</section>
@endsection