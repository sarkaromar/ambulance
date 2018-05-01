@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
<div class="page-header nevy-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">{{ $title }}</h2>
                <p class="page-description yellow-color">মা-মনি অ্যাম্বুলেন্স</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div>

<!-- ====== About Main Content ====== --> 
<div class="about-main-content mr-top-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-top-content">
                    {!! $content !!}
                </div><!-- /.top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.about-main-content -->

<!-- ======driver block======= --> 
<div class="driver-block pd-t-54 pd-btm-72">
    <div class="container">
        <div class="row tb default-margin-bottom yellow-theme">
            <div class="col-md-9 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle">Full Time and Part Time </h3>
                    <h2 class="title">Our Drivers</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-10 -->
            <div class="col-md-3 block-navigation-area hidden-xs tb-cell">
                <div class="pull-right">                    
                    <div class="item-navigation">
                        <a href="#" class="previous-item">
                            <i class="fa fa-angle-left"></i> 
                        </a>

                        <a href="#" class="next-item">
                            <i class="fa fa-angle-right"></i> 
                        </a>
                    </div><!-- /.item-navigation -->
                </div><!-- /.pull-right -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row --> 

        <div class="driver-carousel slider-style-two owl-carousel" data-item="[4,2,2,1]">
            @if(isset($drivers[0]))
            @foreach($drivers as $driver)
            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="{{ URL::to('photo/driver', $driver->driver_image) }}" alt="{{ $driver->driver_title }}" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                       <h2 class="driver-name vehicle-title"><a href="#">{{ $driver->driver_title }}</a></h2>
                        <h4 class="driver-desc">{{ $driver->driver_info }}</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->
            @endforeach
            @endif
        </div><!-- /.driver-carousel -->
    </div><!-- /.container  -->
</div><!-- /.driver-area -->
@endsection