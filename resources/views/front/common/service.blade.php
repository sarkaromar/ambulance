@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
<div class="page-header nevy-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">{{ $title }}</h2>
                <p class="page-description yellow-color">About your Ambulance</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div>
<!-- ====== Vehicle Single Block ====== --> 
<div class="vehicle-single-block vehicle-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="corousel-gallery-content">
                        <div class="gallery">
                            <div class="full-view owl-carousel">
                                @if(isset($sliders[0]))
                                @foreach ($sliders as $list)
                                <a class="item" href="#">
                                    <img src="{{ URL::to('photo/service_slider', $list->service_slider_image) }}" alt="image">
                                </a>
                                @endforeach
                                @endif
                            </div>
                            <div class="list-view owl-carousel">
                                @if(isset($sliders[0]))
                                @foreach ($sliders as $list)
                                <a class="item" href="">
                                    <img src="{{ URL::to('photo/service_slider', $list->service_slider_image) }}" alt="image">
                                </a>
                                @endforeach
                                @endif
                            </div>  
                        </div> <!-- /.gallery-two -->
                    </div> <!-- /.corousel-gallery-content -->
                    <!-- dynamic content -->
                    {!! $content !!}
                </div> <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="vehicle-sidebar pd-zero">                    
                        <form class="advance-search-query search-query-two" action="{{ route('booking') }}" method="POST">
                        {{ csrf_field() }}
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                <strong>Thanks!</strong> {{Session::get('success')}}
                            </div>
                            @endif
                            <h2 class="form-title">Make A Reservation</h2>
                            <div class="form-content available-filter">
                                <div class="regular-search">
                                    <div class="form-group">
                                        <label class="text-uppercase">Full Name</label>
                                        <div class="input">
                                            <i class="fa fa-user"></i>
                                            <input type="text" class="pick-location form-controller" name="name" placeholder="Full Name" required>
                                        </div><!--/.input-->
                                        <label class="text-uppercase">Choose Ambulance</label>
                                        <div class="input">                                    
                                            <select name="amb_type" required>
                                                <option value="">Choose Ambulance</option>
                                                @if($ambtypes[0])
                                                @foreach($ambtypes as $amb_type)
                                                <option value="{{ $amb_type->abmulance_type_id }}">{{ $amb_type->abmulance_type_name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div><!-- /.input -->
                                        <label class="text-uppercase">Form</label>
                                        <div class="input">
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" class="pick-location form-controller" name="form" placeholder="From" required>
                                        </div><!--/.input-->
                                        <label class="text-uppercase">To</label>
                                        <div class="input">
                                            <i class="fa fa-map-marker"></i>
                                            <input class="pick-location form-controller" type="text" name="to" placeholder="To" required>
                                        </div><!--/.input-->
                                        <label>Picking up Date</label>
                                        <div class="input">
                                            <i class="fa fa-calendar"></i>
                                            <input type="text" id="jquery_datepicker" class="form-controller" name="date" placeholder="Date" required>
                                        </div><!--/.input-->
                                        <label class="text-uppercase">Picking up Time</label>
                                        <div class="input">
                                            <i class="fa fa-clock-o"></i>
                                            <input type="text" class="time-selector form-controller" name="time" placeholder="15:00 am" required>
                                        </div><!--/.input-->
                                        <label class="text-uppercase">Mobile number</label>
                                        <div class="input">
                                            <i class="fa fa-mobile"></i>
                                            <input type="text" class="form-controller" name="mobile" placeholder="+8801........." required>
                                        </div><!--/.input-->
                                        <label class="text-uppercase">Email id</label>
                                        <div class="input">
                                            <i class="fa fa-at"></i>
                                            <input type="email" class="form-controller" name="email" placeholder="Email">
                                        </div><!--/.input-->
                                        <label class="text-uppercase">Full Address</label>
                                        <div class="input">
                                            <i class="fa fa-at"></i>
                                            <textarea rows="2" cols="100" name="address" placeholder="Full Address" required></textarea>
                                        </div><!--/.input-->
                                    </div><!-- /.form-group -->
                                </div><!-- /.div regular-search -->
                                <div class="check-vehicle-footer">
                                    <button type="submit" class="button blue-button">Book Now</button>
                                </div><!-- /.check-vehicle-footer -->
                            </div><!-- /.from-cotent -->
                        </form><!-- /.advance_search_query -->
                    </div><!-- /.vehicle-sidebar -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container  -->
    </div><!-- /.Popular Vehicle Block --> 
@endsection