@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.user.left_menu_user')
                    </div>
                    <div class="col-lg-10">
                        <div class="user-body-sec booking-manage">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="manage-nav">
                                        <h4>Vendors</h4>
                                        <ul>
                                            <li><a href="{{ URL::to('user-vendors') }}">Vendors</a></li>
                                            <li><a href="{{ URL::to('user-requested-vendors') }}">Requested Vendors</a></li>
                                            <li><a href="{{ URL::to('user-confirm-vendors') }}">Booked Vendors</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="venue-list">
                                        @if(isset($vendors[0])) 
                                        @foreach($vendors as $vendor)                     
                                        <div class="venues">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <img src="{{ asset($vendor->cre_photo != "" ? 'img/vendor_photo/'.$vendor->cre_photo : 'img/male.jpg') }}" alt="">
                                                </div>
                                                <div class="col-lg-8">
                                                    <h2 class="v-types">{{ $vendor->vendor_types_name }} <i class="fa fa-money"></i> Min rate: TK {{ $vendor->vendor_min_rate }}</h2>
                                                    <h3 class="v-name">{{ $vendor->cre_full_name }} </h3>
                                                    <h5 class="v-exp">Experiance: {{ $vendor->vendor_year_of_exp ? get_exp_month($vendor->vendor_year_of_exp) : '0' }} </h5>
                                                    <p class="v-address"><i class="fa fa-map-marker"></i> Address: {{ $vendor->vendor_address }}, Bangladesh</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="#" class="btn btn-warning btn-block">Panding</a>
                                                    <a href="{{ URl::to('user-vendors-details', $vendor->v_vendor_book_id)}}" class="btn btn-info btn-block">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="alert alert-warning">
                                                    <strong>Sorry!</strong> There is no information!
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection