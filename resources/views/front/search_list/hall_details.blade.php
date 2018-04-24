@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
    <section class="main-body">
        <div class="venue-details">
            <div class="container">
                @if($error)
                <div class="row">
                    <div class="col-lg-9">
                        <div class="alert alert-danger">
                            <strong>Sorry!</strong> Invalid Hall Details!
                        </div>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-lg-9">
                        <h2>{{ $main->ha_name }}</h2>
                        <p>{{ $venue->ve_add }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav">
                            <a class="nav-link active" href="#packages">Packages</a>
                            <a class="nav-link" href="#facilities">Facilities</a>
                            <a class="nav-link" href="#capacity">Capacity</a>
                            <a class="nav-link" href="#food">Food</a>
                            <a class="nav-link" href="#technology">Technology</a>
                            <a class="nav-link" href="#about">About</a>
                            <a class="nav-link" href="#suited">Suited</a>
                            <a class="nav-link" href="#distance">Distance</a>
                            <a class="nav-link" href="#policies">Policies</a>
                            <a class="nav-link" href="#maps">Map</a>
                        </nav>
                        <div class="photos">
                            <div id="slider">
                                <div id="myCarousel" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img class="img-fluid" src="{{ URL::to('img/hall_photo/', $main->ha_m_image) }}" alt="{{ $main->ha_name }}">
                                        </div>
                                        <?php $x = 0; foreach( $images as $image) { $x++; ?>
                                            <div class="item carousel-item" data-slide-number="<?=$x?>">
                                                <img class="img-fluid" src="{{ URL::to('img/hall_photo/', $image->ha_image) }}" alt="{{ $main->ha_name }}">
                                            </div>
                                        <?php } ?>
                                        <div class="slider-controler">
                                            <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                            <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators list-inline">
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                               <img src="{{ URL::to('img/hall_photo/', $main->ha_m_image) }}" alt="{{ $main->ha_name }}">
                                            </a>
                                        </li>
                                        <?php $x = 0; foreach( $images as $image) { $x++; ?>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-<?=$x?>" data-slide-to="<?=$x?>" data-target="#myCarousel">
                                                <img src="{{ URL::to('img/hall_photo/', $image->ha_image) }}" alt="{{ $main->ha_name }}">
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="highlights">
                                <h4 class="card-header">Highlights</h4>
                                <div class="card-body">
                                    <ul>
                                        <li><i class="fa fa-glass" aria-hidden="true"></i>Food &amp; Drinkss : 
                                            <?php if($main->ha_hi_food == '1'){ 
                                                echo 'Allowed'; 
                                            }else{
                                                echo 'Not allowed'; 
                                            } ?></li>
                                        <li><i class="fa fa fa-cutlery" aria-hidden="true"></i>Catering : 
                                            <?php if($main->ha_hi_cater == '1'){
                                                echo 'Option to choose'; 
                                            }elseif($main->ha_hi_cater == '2'){
                                                echo 'Inhouse'; 
                                            }elseif($main->ha_hi_cater == '3'){ 
                                                echo 'Outside';
                                            } ?></li>
                                        <li><i class="fa fa-cutlery" aria-hidden="true"></i>Decoration : 
                                        <?php if($main->ha_hi_decor == '1'){
                                                echo 'provide from venue'; 
                                            }elseif($main->ha_hi_decor == '2'){
                                                echo 'Option to choose'; 
                                            }?></li>
                                        <li><i class="fa fa-snowflake-o" aria-hidden="true"></i>AC : 
                                            <?php if($main->ha_hi_ac == '1'){
                                                echo 'Centralized'; 
                                            }elseif($main->ha_hi_ac == '2'){
                                                echo 'Not available'; 
                                            }elseif($main->ha_hi_ac == '3'){
                                                echo 'Semi Cover'; 
                                            }?></li>
                                    </ul>
                                </div>
                            </div>
                        <div class="card" id="price">
                                <h4 class="card-header">Hall Rental Rate</h4>
                                <div class="card-body">
                                    Minimum Price per guest: <strong><?=$main->ha_gst_min_rate?> Tk.</strong>
                                </div>
                        </div>
                        <div class="card" id="facilities">
                            <h4 class="card-header">Facilities</h4>
                            <div class="card-body">
                                <ul>
                                    @if(isset($facis[0]))
                                    @foreach($facis as $faci)
                                    <li><i class="fa fa-{{ $faci->faci_icon }}"></i> {{ $faci->faci_name }}</i></li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="card" id="capacity">
                            <h4 class="card-header">Capacity</h4>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Minimum</td>
                                            <td>Floating Capacity</td>
                                            <td>Maximum Seating</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $main->ha_ca_min }}</td>
                                            <td>{{ $main->ha_ca_float }}</td>
                                            <td>{{ $main->ha_ca_max }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card" id="seat">
                            <h4 class="card-header">Seating Arrangements</h4>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Shape Name</td>
                                            <td>Board</td>
                                            <td>Class</td>
                                            <td>Theater</td>
                                            <td>Restaurant</td>
                                            <td>UShape</td>
                                            <td>Open Space</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>Capacity</td>
                                                <td>{{ $main->ha_se_board }}</td>
                                                <td>{{ $main->ha_se_class }}</td>
                                                <td>{{ $main->ha_se_theat }}</td>
                                                <td>{{ $main->ha_se_resta }}</td>
                                                <td>{{ $main->ha_se_ushape }}</td>
                                                <td>{{ $main->ha_se_open }}</td>
                                            </tr>
                                            <tr>
                                                <td>Shape</td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/board.png') }}" alt="board"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/class.png') }}" alt="class"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/theater.png') }}" alt="theater"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/cluster.png') }}" alt="cluster"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/u-shape.png') }}" alt="u-shape"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/open.png') }}" alt="board"></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card" id="technology">
                            <h4 class="card-header">Technology & Equipment</h4>
                            <div class="card-body">
                                <ul>
                                    @if(isset($techs[0]))
                                    @foreach($techs as $tech)
                                    <li><i class="fa fa-{{ $tech->tech_icon }}"></i> {{ $tech->tech_name }}</i></li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="card" id="about">
                            <h4 class="card-header">About</h4>
                            <div class="card-body">
                                {{ $main->ha_about }}
                            </div>
                        </div>
                        <div class="card" id="suited">
                            <h4 class="card-header">Event for</h4>
                            <div class="card-body">
                                <ul>
                                    @if(isset($events[0]))
                                    @foreach($events as $event)
                                    <li><i class="fa fa-tag"></i> {{ $event->ev_name }}</li>
                                    @endforeach
                                    @endif
                                </ul>  
                            </div>
                        </div>
                        <div class="card" id="policies">
                            <h4 class="card-header">Terms &amp; Conditions</h4>
                            <div class="card-body">
                               {{ $main->ha_terms }}
                            </div>
                        </div>
                        @if(isset($venue->ve_front_calender) && $venue->ve_front_calender == 1)
                        <p>
                            <strong style="background-color: #ff5252; color: #fff">Full day</strong>
                            <strong style="background-color: #eddd4a;">Morning Session</strong>
                            <strong style="background-color: #42ffdd;">Evening session</strong>
                        </p>
                        <div class="card" id="calendars">
                            <h4 class="card-header">Booking Calendar</h4>
                            <div class="card-body">
                                <div id='calendar'></div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-3">
                        <div class="contact-details">
                            <h5>Talk to Venue Manager:</h5>
                            <p><i class="fa fa-user"> {{ $venue->cre_full_name }}</i> </p>
                            <p><i class="fa fa-phone"></i> {{ $venue->ve_phn }}</p>
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
                            <form method="POST" action="{{ url('venue-send-query') }}">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="timeshift" class="control-label mb-10">Your expected date</label>
                                    <input id="datepicker" class="form-control" type="text" name="date" placeholder="your expected date" required />
                                </div>
                                <div class="form-group">
                                    <label for="timeshift" class="control-label mb-10">Time Shift</label>
                                    <select class="form-control" name="shift" required>
                                        <option value="0">Full day</option>
                                        <option value="1">Morning Session - Lunch</option>
                                        <option value="2">Evening Session - Dinner</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="timeshift" class="control-label mb-10">Message</label>
                                    <textarea class="form-control" name="message" rows="5" placeholder="write your message to vendor..." required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-block">Send Message</button>
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
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection