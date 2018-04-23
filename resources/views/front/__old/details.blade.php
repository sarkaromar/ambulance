@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
    <section class="main-body">
        <div class="venue-details">
            <div class="container">
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
                                            <img class="img-fluid" src="{{ URL::to('assets/images/hall/', $main->ha_m_image) }}" alt="{{ $main->ha_name }}">
                                        </div>
                                        <?php $x = 0; foreach( $images as $image) { $x++; ?>
                                            <div class="item carousel-item" data-slide-number="<?=$x?>">
                                                <img class="img-fluid" src="{{ URL::to('assets/images/hall/', $image->ha_image) }}" alt="{{ $main->ha_name }}">
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
                                               <img src="{{ URL::to('assets/images/hall/', $main->ha_m_image) }}" alt="{{ $main->ha_name }}">
                                            </a>
                                        </li>
                                        <?php $x = 0; foreach( $images as $image) { $x++; ?>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-<?=$x?>" data-slide-to="<?=$x?>" data-target="#myCarousel">
                                                <img src="{{ URL::to('assets/images/hall/', $image->ha_image) }}" alt="{{ $main->ha_name }}">
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
                        <div class="card" id="packages">
                            <h4 class="card-header">Packages (static)</h4>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Packages 1 </td>
                                            <td>Packages 2 </td>
                                            <td>Packages 3 </td>
                                            <td>Packages 4 </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>999</td>
                                                <td>999</td>
                                                <td>999</td>
                                                <td>999</td>
                                            </tr>
                                            <tr>
                                                <td>999</td>
                                                <td>999</td>
                                                <td>999</td>
                                                <td>999</td>
                                            </tr>
                                            <tr>
                                                <td>999</td>
                                                <td>999</td>
                                                <td>999</td>
                                                <td>999</td>
                                            </tr>
                                            <tr>
                                                <td><a class="btn btn-warning">Details</a></td>
                                                <td><a class="btn btn-warning">Details</a></td>
                                                <td><a class="btn btn-warning">Details</a></td>
                                                <td><a class="btn btn-warning">Details</a></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card" id="facilities">
                            <h4 class="card-header">Facilities</h4>
                            <div class="card-body">
                                <ul>
                                    @foreach($facis as $faci)
                                    <li><i class="fa fa-{{ $faci->faci_icon }}"></i> {{ $faci->faci_name }}</i></li>
                                    @endforeach
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
                        <div class="card" id="food">
                            <h4 class="card-header">Food and Drinks (static)</h4>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
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
                                                <td><img src="{{ URL::to('assets/back/dist/seat_arrang/board.png') }}" alt="board"></td>
                                                <td><img src="{{ URL::to('assets/back/dist/seat_arrang/class.png') }}" alt="class"></td>
                                                <td><img src="{{ URL::to('assets/back/dist/seat_arrang/theater.png') }}" alt="theater"></td>
                                                <td><img src="{{ URL::to('assets/back/dist/seat_arrang/cluster.png') }}" alt="cluster"></td>
                                                <td><img src="{{ URL::to('assets/back/dist/seat_arrang/u-shape.png') }}" alt="u-shape"></td>
                                                <td><img src="{{ URL::to('assets/back/dist/seat_arrang/open.png') }}" alt="board"></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card" id="technology">
                            <h4 class="card-header">Technology & Equipment</h4>
                            <div class="card-body">
                                <ul>
                                    @foreach($techs as $tech)
                                    <li><i class="fa fa-{{ $tech->tech_icon }}"></i> {{ $tech->tech_name }}</i></li>
                                    @endforeach
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
                                    @foreach($events as $event)
                                    <li><i class="fa fa-tag"></i> {{ $event->ev_name }}</li>
                                    @endforeach
                                </ul>  
                            </div>
                        </div>
                        <div class="card" id="distance">
                            <h4 class="card-header">Distance from (static)</h4>
                            <div class="card-body">
                                   <p><i class="fa fa-bus"></i> Nearest Bus Stop: NA</p> 
                                   <p><i class="fa fa-train"></i> Nearest Railway Station: NA</p>
                                   <p><i class="fa fa-plane"></i> Dhaka International Airport is 40.21 Km</p>
                                   <p><i class="fa fa-subway"></i> Dhaka City subway Station is 9.28 Km</p>
                             </div>
                        </div>
                        <div class="card" id="policies">
                            <h4 class="card-header">Terms &amp; Conditions</h4>
                            <div class="card-body">
                               {{ $main->ha_terms }}
                            </div>
                        </div>
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
                    </div>
                    <div class="col-lg-3">
                        <div class="contact-details">
                            <h5>Talk to Venue Manager:</h5>
                            <p><i class="fa fa-user"></i> {{ $owner->ow_name }}</p>
                            <p><i class="fa fa-phone"></i> {{ $venue->ve_phn1 }}</p>
                        </div>
                        <div class="search-again-details">
                            <h4>Check Availability</h4>
                            <form class="form">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter Your location">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="date">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="type" id="type">
                                        <option value="#">Party Hall</option>
                                        <option value="#">Weding Hall</option>
                                        <option value="#">Family Hall</option>
                                        <option value="#">Business Hall</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-block">Search</button>
                                </div>
                            </form>
                        </div> 
                        <div class="contact-details">
                            <h5>Send to Venue Manager</h5><br>
                            <form class="form">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter Phone number">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter Your location">
                                    </div>
                                <div class="form-group">
                                    <input class="form-control" type="date">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="type" id="type">
                                        <option value="#">Party Hall</option>
                                        <option value="#">Weding Hall</option>
                                        <option value="#">Family Hall</option>
                                        <option value="#">Business Hall</option>
                                    </select>
                                </div>
                                <div class="from-group">
                                    <textarea name="msg" id="msg" cols="30" rows="5" class="form-control"></textarea>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-block">SEND</button>
                                </div>
                            </form>
                        </div>  
                        <div class="nearby">
                            <h4>Nearby Venue</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Business Hall</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Family Hall</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Weding Hall</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Party Hall</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Business Hall</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Family Hall</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Weding Hall</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Party Hall</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="maps" id="maps">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Location Map (s)</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3649.8168984086756!2d90.42565151498277!3d23.825109234552585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbashundhara+convention+center!5e0!3m2!1sen!2s!4v1508062777963" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="p-venue">
        <div class="container">
          <h2>Party Halls, Banquet Halls around Your Area (static)</h2>
          <span class="divi"></span>
          <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('assets/images/v1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('assets/images/v1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('assets/images/v1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>
                
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('assets/images/v1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
      </section>
@endsection