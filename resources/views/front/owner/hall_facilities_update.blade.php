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
                                    <div class="card" id="facilities-">
                                        <h4 class="card-header">Facilities</h4>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                <i class="fa fa-snowflake-o" aria-hidden="true"></i> Air Condition
                                                </label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                <i class="fa fa-wheelchair" aria-hidden="true"></i> Disable access
                                                </label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                <i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI
                                                </label>
                                            </div>
                                            
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="fa fa-car"></i> CAR Parking Facilities</i></li>
                                                </label>
                                                </div>
                                            
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i> Air Condition</i>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"><i class="fa fa-university" aria-hidden="true"></i> Hall Facilities</i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input"><i class="fa fa-cutlery" aria-hidden="true"></i> Food Facilities</i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input"><i class="fa fa-glass" aria-hidden="true"></i> Bar/Drinks</i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input"><i class="fa fa-wheelchair" aria-hidden="true"></i> Disable access</i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input"><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" id="technology">
                                            <h4 class="card-header">Technology & Equipment</h4>
                                            <div class="card-body">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                        <i class="fa fa-snowflake-o" aria-hidden="true"></i> Air Condition
                                                        </label>
                                                    </div>
                                                    
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                        <i class="fa fa-wheelchair" aria-hidden="true"></i> Disable access
                                                        </label>
                                                    </div>
                                                    
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                        <i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI
                                                        </label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="card" id="food">
                                                <h4 class="card-header">Food and Drinks</h4>
                                                <div class="card-body">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                        Food Type: Veg & Non-Veg allowed
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Drinks:  Allowed
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Catering:  Option to choose inhouse / outside
                                                        </label>
                                                    </div>
                                                        
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