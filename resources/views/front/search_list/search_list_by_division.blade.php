@extends('front.layouts.template')

@section('content')
<!-- section -->
<section class="main-body">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="venue-list">
                    @if(isset($lists[0]))
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
                        <strong>Sorry!</strong> There is no hall found!
                    </div>
                    @endif
                </div> <!-- venue-list -->
            </div><!-- /list col -->
        </div>
    </div>
</section>
@endsection