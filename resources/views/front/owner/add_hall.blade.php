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
                    <div class="user-body-sec">
                        <div class="tab-pane fade show active" id="addnew" role="tabpanel" aria-labelledby="addnew-tab">
                            <div class="card" id="highlight-">
                                @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left"><strong>Opps!</strong> {{Session::get('error')}}</p>
                                    <div class="clearfix"></div>
                                </div>
                                @endif
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left"><strong>Yay!</strong> {{Session::get('success')}}</p> 
                                    <div class="clearfix"></div>
                                </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h4 class="card-header">Add Hall</h4>
                                <div class="card-body">
                                    <form action="{{ route('add_hall') }}" method="POST"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div id="error"></div>
                                        <div class="form-group">
                                            <label for="name">Name<sup style="color: red">*</sup></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="e.g. hall name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">About<sup style="color: red">*</sup></label>
                                            <textarea id="about" class="form-control" rows="5" name="about" placeholder="write about hall..." ></textarea>
                                        </div>  
                                        <h6>Highlights</h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Food & Drinkss<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="food" required>
                                                        <option value="1">Allowed</option>
                                                        <option value="0">Not allowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Catering<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="catering" required>
                                                        <option value="1">Option to choose</option>
                                                        <option value="2">Inhouse</option>
                                                        <option value="3">Outside</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Decoration<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="decoration" required>
                                                        <option value="1">Venue owner will provide</option>
                                                        <option value="2">Option to choose</option>
                                                    </select>
                                                </div> 
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">AC<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="ac" required>
                                                        <option value="1">Centralized</option>
                                                        <option value="2">Not available</option>
                                                        <option value="3">Semi Cover</option>
                                                    </select>
                                                </div> 
                                            </div> 
                                        </div>  
                                        <h6>Other Options</h6><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Facilities</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($facis as $faci)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="faci[]" value="{{ $faci->id }}" type="checkbox">
                                                        <label>
                                                            <i class="fa fa-{{ $faci->faci_icon }}" aria-hidden="true"></i> {{ $faci->faci_name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Tech. & Equip</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($techs as $tech)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="tech[]" value="{{ $tech->id }}" type="checkbox" >
                                                        <label for="checkbox2">
                                                            <i class="fa fa-{{ $tech->tech_icon }}" aria-hidden="true"></i> {{ $tech->tech_name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Event Type</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($events as $event)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="event[]" value="{{ $event->id }}" type="checkbox" >
                                                        <label for="checkbox2">{{ $event->ev_name }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>  
                                            </div>
                                        </div>
                                        <h6>Parking :<sup style="color: red">*</sup></h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control"  name="bike" placeholder="bike" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="car" placeholder="car" required>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="bus" placeholder="bus" required>
                                                </div> 
                                            </div>
                                        </div>
                                        <h6>Hall Capacity :<sup style="color: red">*</sup></h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control"  name="min" placeholder="minimum seating" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="max" placeholder="maximum seating" required>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="float" placeholder="floating capacity" required>
                                                </div> 
                                            </div>
                                        </div>
                                        <h6>Seating Arrangements :<sup style="color: red">*</sup></h6><hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Board</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/board.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="board">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Class</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/class.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="class">
                                                    </div>
                                                </div> 
                                            </div> 
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Theater</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/theater.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="theater" >
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Restaurant</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/cluster.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="restaurant">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>U-shape</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/u-shape.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="u_shape">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Open Space</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/open.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="open">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Price per guest :<sup style="color: red">*</sup></label>
                                                    <input type="number" class="form-control"  name="min_rate" placeholder="strat from" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Timing :<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="timing" required>
                                                        <option value="1">Full Day</option>
                                                        <option value="2">Shift Based</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="about">Terms &  conditions<sup style="color: red">*</sup></label>
                                            <textarea class="form-control" rows="5" name="terms" placeholder="write your terms..." ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Main Image :<sup style="color: red">*</sup></label>
                                            <input type="file" name="main_image" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Images :<sup style="color: red">*</sup></label>
                                            <input type="file" name="images[]" multiple/>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


                <!-- new design as box -->
                <!-- <div class="col-lg-10">
                    <div class="user-body-sec grid">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-basic-info') }}">
                                        <i class="fa fa-info"></i>
                                        <h3>Basic info</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-photos-upload') }}">
                                        <i class="fa fa-images"></i>
                                        <h3>UPLOAD PHOTOS</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-facilities-update') }}">
                                        <i class="fa fa-star"></i>
                                        <h3>FACILITIE</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-capacity-update') }}">
                                        <i class="fa fa-hdd"></i>
                                        <h3>CAPACITYS</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-highlight-update') }}">
                                        <i class="fa fa-asterisk"></i>
                                        <h3>HIGHLIGHTS</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-suited-update') }}">
                                        <i class="fa fa-puzzle-piece"></i>
                                        <h3>SUITED</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-distance-update') }}">
                                        <i class="fa fa-map-signs"></i>
                                        <h3>DISTANCE</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-price-update') }}">
                                        <i class="fa fa-money-bill-alt"></i>
                                        <h3>PRICE</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-package-update') }}">
                                        <i class="fa fa-archive"></i>
                                        <h3>PACKAGE</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="grid-item">
                                    <a href="{{ url('hall-seat-update') }}">
                                        <i class="fa fa-sitemap"></i>
                                        <h3>SEATS</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            
                            <div class="tab-pane fade" id="availability" role="tabpanel" aria-labelledby="availability-tab"> 
                                <div class="card" id="calendars">
                                    <h4 class="card-header">Event Calendar</h4>
                                    <div class="card-body">
                                        <div id='calendar'></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->



<!-- old design section -->
<!-- <section class="main-body">
    <div class="venue-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="user-sec">
                        <div class="avater">
                            <a href="">
                                <img src="{{ URL::to('images/4_1.png') }}" alt="">
                            </a>
                            <div class="venue-user">
                                <h3>{{ Auth::user()->ow_name }}</h3>
                                <h4>ID: {{ Auth::user()->ow_id }}</h4>
                            </div>
                            <div class="user-menu">
                                <ul>
                                    <li><a href="{{url('my-venue')}}">My Venue</a></li>
                                    <li><a href="{{url('my-hall-list')}}">My Hall List</a></li>
                                    <li><a href="{{url('my-profile')}}">My Profile</a></li>
                                </ul>
                            </div>
                            <div class="offers">
                                <h3>Notice Section</h3> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="user-body-sec">
                        <div class="tab-pane fade show active" id="addnew" role="tabpanel" aria-labelledby="addnew-tab">
                            <div class="card" id="highlight-">
                                @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left"><strong>Opps!</strong> {{Session::get('error')}}</p>
                                    <div class="clearfix"></div>
                                </div>
                                @endif
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left"><strong>Yay!</strong> {{Session::get('success')}}</p> 
                                    <div class="clearfix"></div>
                                </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h4 class="card-header">Add Hall</h4>
                                <div class="card-body">
                                    <form action="{{ route('add_hall') }}" method="POST"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div id="error"></div>
                                        <div class="form-group">
                                            <label for="name">Name<sup style="color: red">*</sup></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="e.g. hall name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">About<sup style="color: red">*</sup></label>
                                            <textarea id="about" class="form-control" rows="5" name="about" placeholder="write about hall..." ></textarea>
                                        </div>  
                                        <h6>Highlights</h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Food & Drinkss<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="food" required>
                                                        <option value="1">Allowed</option>
                                                        <option value="0">Not allowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Catering<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="catering" required>
                                                        <option value="1">Option to choose</option>
                                                        <option value="2">Inhouse</option>
                                                        <option value="3">Outside</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Decoration<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="decoration" required>
                                                        <option value="1">Venue owner will provide</option>
                                                        <option value="2">Option to choose</option>
                                                    </select>
                                                </div> 
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">AC<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="ac" required>
                                                        <option value="1">Centralized</option>
                                                        <option value="2">Not available</option>
                                                        <option value="3">Semi Cover</option>
                                                    </select>
                                                </div> 
                                            </div> 
                                        </div>  
                                        <h6>Other Options</h6><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Facilities</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($facis as $faci)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="faci[]" value="{{ $faci->id }}" type="checkbox">
                                                        <label>
                                                            <i class="fa fa-{{ $faci->faci_icon }}" aria-hidden="true"></i> {{ $faci->faci_name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Tech. & Equip</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($techs as $tech)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="tech[]" value="{{ $tech->id }}" type="checkbox" >
                                                        <label for="checkbox2">
                                                            <i class="fa fa-{{ $tech->tech_icon }}" aria-hidden="true"></i> {{ $tech->tech_name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Event Type</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($events as $event)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="event[]" value="{{ $event->id }}" type="checkbox" >
                                                        <label for="checkbox2">{{ $event->ev_name }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>  
                                            </div>
                                        </div>
                                        <h6>Parking :<sup style="color: red">*</sup></h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control"  name="bike" placeholder="bike" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="car" placeholder="car" required>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="bus" placeholder="bus" required>
                                                </div> 
                                            </div>
                                        </div>
                                        <h6>Hall Capacity :<sup style="color: red">*</sup></h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control"  name="min" placeholder="minimum seating" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="max" placeholder="maximum seating" required>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="float" placeholder="floating capacity" required>
                                                </div> 
                                            </div>
                                        </div>
                                        <h6>Seating Arrangements :<sup style="color: red">*</sup></h6><hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Board</h5>
                                                    <img src="{{ URL::to('back/dist/seat_arrang/board.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="board">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Class</h5>
                                                    <img src="{{ URL::to('back/dist/seat_arrang/class.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="class">
                                                    </div>
                                                </div> 
                                            </div> 
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Theater</h5>
                                                    <img src="{{ URL::to('back/dist/seat_arrang/theater.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="theater" >
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Restaurant</h5>
                                                    <img src="{{ URL::to('back/dist/seat_arrang/cluster.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="restaurant">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>U-shape</h5>
                                                    <img src="{{ URL::to('back/dist/seat_arrang/u-shape.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="u_shape">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Open Space</h5>
                                                    <img src="{{ URL::to('back/dist/seat_arrang/open.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="open">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Price per guest :<sup style="color: red">*</sup></label>
                                                    <input type="number" class="form-control"  name="min_rate" placeholder="strat from" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Timing :<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="timing" required>
                                                        <option value="1">Full Day</option>
                                                        <option value="2">Shift Based</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="about">Terms &  conditions<sup style="color: red">*</sup></label>
                                            <textarea class="form-control" rows="5" name="terms" placeholder="write your terms..." ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Main Image :<sup style="color: red">*</sup></label>
                                            <input type="file" name="main_image" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Images :<sup style="color: red">*</sup></label>
                                            <input type="file" name="images[]" multiple/>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection