
@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
    <div class="venue-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    @include('front.owner.left_menu')
                </div>
                <div class="col-lg-10">
                    <div class="user-body-sec grid">
                            <div class="card" id="distances">
                                <h4 class="card-header">Distance from</h4>
                                <div class="card-body">
                                        <p><i class="fa fa-bus"></i> Nearest Bus Stop: NA <input type="text" class="form-control" placeholder="km if not availble just type NA"></p> 
                                        <p><i class="fa fa-train"></i> Nearest Railway Station: NA<input type="text" class="form-control" placeholder="km"></p>
                                        <p><i class="fa fa-plane"></i> Dhaka International Airport is 40.21 Km<input type="text" class="form-control" placeholder="km"></p>
                                        <p><i class="fa fa-subway"></i> Dhaka City subway Station is 9.28 Km<input type="text" class="form-control" placeholder="km"></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection