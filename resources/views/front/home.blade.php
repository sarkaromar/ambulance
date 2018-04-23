@extends('front.layouts.template')

@section('content')
<section class="main-body">
    <div class="recent-item clearfix">
      <div class="recent-header">
        <ul>
          <li id="recent-lost"><a class="alt" href="{{ url('lost-list') }}">Recently added Lost item</a></li>
          <li id="recent-found"><a href="{{ url('found-list') }}">Recently added Found item</a></li>
        </ul>
      </div>
      <div class="recent-item-body">
        <div class="recent-i lost-i">
            <div class="row">
              @if(isset($losts[0]))
                @foreach($losts as $list)
                <div class="col-lg-4">
                    <div class="i-card">
                      <div class="i-card-img">
                        <img class="" src="{{ URL::to('assets/images/lost_report/' . $list->lost_item_image) }}" alt="{{ $list->lost_item_name }}">
                      </div>
                      <div class="i-card-body found-bg">
                        <a href="{{ url('/lost-item-details/'. $list->lost_id) }}" class="i-text">
                          <div class="hh">What?</div>  
                          <h5 class="i-card-title">{{ $list->lost_item_name }}</h5>
                          <div class="hh">Where?</div> 
                          <p class="i-card-text"><i class="fa fa-map-marker"></i> {{ $list->area_name }}</p>
                          <div class="hh">When?</div> 
                          <p class="i-card-text"><i class="fa fa-calendar-alt"></i> {{ $list->lost_date}}</p>
                          <div class="hh">{{ $list->lost_reword }}</div>
                        </a>
                      </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                      <strong>Empty!</strong> There is no data!
                    </div>
                </div>
                @endif
              </div>
            <br>
            <a href="{{ url('lost-list') }}" class="float-right">EXPLORE ALL</a>
        </div>
        <div class="recent-i found-i">
            <div class="row">
              @if(isset($founds[0]))
                @foreach($founds as $list)
                <div class="col-lg-4">
                    <div class="i-card">
                      <div class="i-card-img">
                        <img class="" src="{{ URL::to('assets/images/found_report/' . $list->found_item_image) }}" alt="{{ $list->found_item_name }}">
                      </div>
                      <div class="i-card-body found-bg">
                        <a href="{{ url('/found-item-details/'. $list->found_id) }}" class="i-text">
                          <div class="hh">What?</div>  
                          <h5 class="i-card-title">{{ $list->found_item_name }}</h5>
                          <div class="hh">Where?</div> 
                          <p class="i-card-text"><i class="fa fa-map-marker"></i> {{ $list->area_name }}</p>
                          <div class="hh">When?</div> 
                          <p class="i-card-text"><i class="fa fa-calendar-alt"></i> {{ $list->found_date}}</p>
                        </a>
                      </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                      <strong>Empty!</strong> There is no data!
                    </div>
                </div>
                @endif
            </div>
            <br>
            <a href="{{ url('found-list') }}" class="float-right">EXPLORE ALL</a>
        </div>
      </div>
    </div>

  </section>
<br>
<section class="testimonial"> 
</section>
@endsection