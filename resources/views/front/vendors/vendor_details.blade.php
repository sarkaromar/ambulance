@extends('front.layouts.template')

@section('content')
<!-- section -->
<section class="main-body">
    <div class="venue-details">
        <div class="container">
            @if (Session::has('danger'))
            <div class="alert alert-danger">
                <strong>Sorry!</strong> {{Session::get('danger')}}
            </div>
            @endif
            @if (isset($vendor))
            <div class="row">
                <div class="col-lg-9">
                    <h2>{{ $vendor->cre_full_name }} | {{ $vendor->vendor_types_name }}</h2> 
                    <a href="{{ URL::to('http://www.facebook.com/sharer.php?u=' ), urlencode($curent_url) }}" ><i class="fa fa-facebook" aria-hidden="true"></i>FB Share</a>
                    <p><strong>Starting from</strong> {{ $vendor->vendor_min_rate }} and <strong>Experience</strong> {{ get_exp_month($vendor->vendor_year_of_exp) }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <nav class="nav">
                        <a class="nav-link" href="#about">About</a>
                    </nav>
                    <div class="photos">
                        <div id="slider">
                            <div id="myCarousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item carousel-item" data-slide-number="0">
                                        <img class="img-fluid" src="{{ asset($vendor->vendor_banner_image != '' ? 'img/vendor_photo/'.$vendor->$vendor->vendor_banner_image : 'img/empty_img.png') }}" alt="{{ $vendor->cre_full_name }}">
                                    </div>
                                    @if(isset($images[0]))
                                    <?php $x = 0; foreach($images as $image) { $x++; ?>
                                        <div class="item carousel-item" data-slide-number="<?=$x?>">
                                            <img class="img-fluid" src="{{ asset($vendor->portfolio_images != '' ? 'img/vendor_photo/'.$vendor->$vendor->portfolio_images : 'img/empty_img.png') }}" alt="{{ $vendor->cre_full_name }}">
                                        </div>
                                    <?php } ?>
                                    @endif
                                    <div class="slider-controler">
                                        <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                        <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="about">
                        <h4 class="card-header">About</h4>
                        <div class="card-body">
                            <p>{{ $vendor->vendor_about }}</p>
                        </div>
                    </div>
                </div>
                <!-- for booking -->
                <div class="col-lg-3">
                    <div class="contact-details">
                        <h5>Contact details:</h5>
                        <p><i class="fa fa-user"></i> {{ $vendor->cre_full_name }}</p>
                        <p><i class="fa fa-phone"></i> {{ $vendor->vendor_phone }}</p>
                        <p><i class="fa fa-map-marker"></i> {{ $vendor->vendor_address }}, {{ $vendor->ar_name }}, {{ $vendor->di_name }}</p>
                    </div>
                    @guest
                    <div class="search-again-details">
                        <h4>Check Availability?</h4>
                        <a href="{{ URl('login') }}">Please Logged-in first!</a>
                    </div>
                    @elseif(Auth::user()->cre_type == 1)
                    <div class="search-again-details">
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            <strong>Congratulations!</strong> {{Session::get('success')}}
                        </div>
                        @endif
                        @if (Session::has('error'))
                        <div class="alert alert-danger">
                            <strong>Sorry!</strong> {{Session::get('error')}}
                        </div>
                        @endif
                        <h4>Check Availability</h4>
                        <form method="POST" action="{{ url('vendors-send-query') }}">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="timeshift" class="control-label mb-10">Your expected date</label>
                                <input id="datepicker" class="form-control" type="text" name="date" placeholder="your expected date" required />
                            </div>
                            <div class="form-group">
                                <label for="timeshift" class="control-label mb-10">Message</label>
                                <textarea class="form-control" name="message" rows="5" placeholder="write your message to vendor (within 5000 words)..." required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-block">Send Query</button>
                            </div>
                        </form>
                    </div> 
                    @elseif(Auth::user()->cre_type == 2 || Auth::user()->cre_type == 3)
                    <div class="search-again-details">
                        <h4>Check Availability?</h4>
                        <a href="#">Only user can check availability!</a>
                    </div>
                    @endif
                </div>
                <!-- /for booking -->
            </div>
            @else
            <div class="alert alert-danger">
                <strong>Sorry!</strong> No vendor found!.
            </div>
            @endif 
        </div>
    </div>
</section>
@endsection