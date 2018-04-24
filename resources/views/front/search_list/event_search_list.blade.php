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
                    <form class="form" action="{{ route('hall-search-list') }}" method="get">
                        <label for="event_type">Event Type</label>
                        <select class="form-control" name="event_type" id="event_type">
                            <option value="any">Any Event</option>
                            @if(!empty($events['0']))
                            @foreach($events as $event)
                            <option value="{{ $event->ev_slug }}" <?php if(!empty($event_type)){ if($event->ev_slug == $event_type){echo 'selected';}}?> >{{ $event->ev_name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <label for="division">Division<sup style="color:red">*</sup></label>
                        <select class="form-control" name="division" id="division_slug_venue" required>
                            <option value="">Please Select</option>
                            @if(!empty($divis[0]))
                            @foreach($divis as $divi)
                            <option value="{{ $divi->di_slug }}" <?php if(!empty($division)){ if($divi->di_slug == $division){echo 'selected';}}?> >{{ $divi->di_name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <label for="location">Area<sup style="color:red">*</sup></label>
                        <select class="form-control" name="area" id="area_slug_venue" required>
                            <option value="any">Any Area</option>
                            @if(!empty($areas['0']))
                            @foreach($areas as $area_info)
                            <option value="{{ $area_info->ar_slug }}" <?php if(!empty($area)){ if($area_info->ar_slug == $area){echo 'selected';}} ?> >{{ $area_info->ar_name }}</option>
                            @endforeach
                            @endif
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
                        <br>
                        <button type="submit" class="home-continue btn btn-warning btn-block">Search</button>
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
                                <img src="{{ URL::to('img/hall_photo/', $list->ha_m_image) }}" alt="{{ $list->ha_name }}">
                            </div>
                            <div class="col-lg-6">
                                <h3>{{ $list->ha_name }}</h3>
                                <p><i class="fa fa-map-marker"></i> {{ $list->ve_add }}</p>
                                <p><i class="fa fa-tag"></i>
                                    @php
                                    $events = get_event_type_name_list_by_hall_id($list->id);
                                    @endphp
                                    @if(isset($events))
                                    @foreach($events as $event)
                                        {{ $event->ev_name }}
                                    @endforeach
                                    @endif
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h4><i class="fa fa-gift"></i> Package / person from</h4>
                                <h3>TK {{ $list->ha_gst_min_rate }}</h3>
                                <a href="{{ url('/hall-details', $list->ha_slug) }}" class="btn btn-danger btn-block">Details</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="fecilitys">
                                    <ul>
                                        @php
                                        $facilities = get_hall_facility_list_by_hall_id($list->id);
                                        @endphp
                                        @if(isset($facilities))
                                        @foreach($facilities as $faci)
                                            <li><i class="fa fa-{{ $faci->faci_icon }}"></i> {{ $faci->faci_name }}</i></li> 
                                        @endforeach
                                        @endif
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