@extends('front.layouts.template')

@section('content')
  <section class="main-body">
    <div class="filter-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><h3>{{ $title }}</h3></div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
    <div class="details-sec">
        <div class="container">
            <div class="row">
                @if(is_object($list) && $list != 'empty')
                <div class="col-md-6 col-sm-6">
                    <h2 class="title"><span>Found :</span> {{ $list->found_item_name }}</h2>
                    <h4 class="title cate"><span>Category :</span> {{ $list->post_category_name }}</h4>
                    <dl class="details">
                        <dt>Where</dt>
                        <dd>{{ $list->found_address }}, {{ $list->area_name }}, {{ $list->divi_name }}</dd>
                    </dl>
                    <dl class="details">
                        <dt>When</dt>
                        <dd>{{ $list->found_date }}</dd>
                    </dl>
                    <div class="desc">
                        <span>Description :</span>
                        {{ $list->found_details }}
                    </div>
                    <h4 class="contact">Contact Information</h4>
                    <div class="contact-details">
                        <div itemprop="name" class="name">{{ $list->name }}</div>
                        <div itemprop="email" class="email">{{ $list->email }}</div>
                        <div itemprop="telephone">{{ $list->phone }}</div>
                    </div>
                    <div class="share-this-item">
                        <h4>
                            Share your Lost/Found item
                        </h4>
                        <ul class="social-link">
                            <li><i class="fas fa-share-alt fa-2x"></i> &nbsp; </li>
                            <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube-square fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-img">
                       <img class="img img-responsive" src="{{ URL::to('assets/images/found_report' , $list->found_item_image) }}" alt="{{ $list->lost_item_name }}">
                    </div>
                </div>
                @else
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                      <strong>Empty!</strong> There is no result!
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <br>
    <div class="location-map">
    <div id="map"></div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtKsMlfvxdLxlHdIuQtR6kFyWG3hxWvO8&callback=initMap"></script>
    </div>
    <br>
    <div class="recent-item clearfix">
        <h3 class="title-similar">Few item's Lost/Found in this area</h3>
        <br>
        <div class="recent-item-body lost-list">
            <div class="lost-i">
                <div class="row">
                    <!-- item 01 -->
                    <div class="col-lg-2">
                        <div class="i-card">
                            <div class="i-card-img">
                            <img class="" src="{{ URL::to('assets/images/images.jpg') }}" alt="">
                            </div>
                            <div class="i-card-body lost-bg">
                            <a href="item-details.html" class="i-text">
                                <div class="hh">What?</div>  
                                <h5 class="i-card-title">Laptop</h5>
                                <div class="hh">Where?</div> 
                                <p class="i-card-text"><i class="fa fa-map-marker"></i> BanglaMotor</p>
                                <div class="hh">When?</div> 
                                <p class="i-card-text"><i class="fa fa-calendar-alt"></i> 20-02-2018</p>
                                <div class="hh">tk150000</div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- /item 01 -->
                </div>
                <br>
            </div>
        </div>
    </div>    
  </section>
@endsection