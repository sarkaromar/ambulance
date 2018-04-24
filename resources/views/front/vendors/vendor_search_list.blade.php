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
                    <div id="#error"></div>
                    <form class="form" action="{{ url('vendors-search-list') }}" method="GET">
                        <label for="type">Vendors Type<sup style="color:red">*</sup></label>
                        <select class="form-control" name="type" id="type" required>
                            <option value="">Please Select...</option>
                            @if(!empty($vendors_types['0']))
                            @foreach($vendors_types as $vendors_type)
                            <option value="{{ $vendors_type->vendor_types_slug }}" <?php if(!empty($type)){ if($vendors_type->vendor_types_slug == $type){echo 'selected';}}?> >{{ $vendors_type->vendor_types_name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <label for="division_slug">Division<sup style="color:red">*</sup></label>
                        <select class="form-control" name="division" id="division_slug_venue" required>
                            <option value="">Please Select...</option>
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
                        <br>
                        <button type="submit" class="home-continue btn btn-warning btn-block">Search</button>
                    </form>
                </div>
            </div><!-- /filter col -->
            <!-- list col -->
            <div class="col-lg-8">
                <div class="venue-list">
                @if(!empty($vendors[0]))
                    @foreach ($vendors as $vendor)
                    <div class="venues">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ URL::to('img/vendor_photo/', $vendor->vendor_banner_image ) }}" alt="{{ $vendor->cre_full_name }}">
                            </div>
                            <div class="col-lg-6">
                                <h3>{{ $vendor->cre_full_name }} | {{ $vendor->vendor_types_name }}</h3>
                                <p><strong>Experience</strong> {{ get_exp_month($vendor->vendor_year_of_exp) }}</p>
                            </div>
                            <div class="col-lg-3">
                                <h4><i class="fa fa-gift"></i> Starting from</h4>
                                <h3>{{ $vendor->vendor_min_rate }}</h3>
                                <a href="{{ url('/vendor', $vendor->vendor_id) }}" class="btn btn-danger btn-block">Details</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p><strong>About: </strong> @php
                                    $a = $vendor->vendor_about;
                                    if (strlen($a) > 180) {
                                        $stringCut = substr($a, 0, 180);
                                        echo $stringCut . " ...";
                                    } else {
                                        echo $a;
                                    }
                                    @endphp
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> There is no result! Please search again.
                    </div>
                    @endif        
                </div>
            </div>
        </div>
    </div>
</section>
@endsection