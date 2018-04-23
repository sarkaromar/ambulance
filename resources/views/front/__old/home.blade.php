@extends('front.layouts.template')

@section('content')
<!-- slider section -->
<section class="slider">
  <div class="search-sec ">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-7">
              <h2>Book a perfect Venue Online</h2>
              <p>for your Banquet, Party, Conference, Wedding...</p>
          </div>
        </div>
      </div>
  </div>
</section>
<section class="v-user">
    <div class="container">
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form" action="{{ route('venue-list') }}" method="GET">
            <div class="row">
                <div class="col-md-3">
                    <label for="type">Event Type<sup>*</sup></label>
                    <select class="form-control" name="type" id="type">
                        <option value="any">Any Event</option>
                        @if(!empty($events['0']))
                        @foreach($events as $event)
                        <option value="{{ $event->id }}">{{ $event->ev_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="division">Division<sup>*</sup></label>
                    <select class="form-control" name="division" id="division" required>
                        <option value="">Please Select</option>
                        @if(!empty($divis['0']))
                        @foreach($divis as $divi)
                        <option value="{{ $divi->id }}">{{ $divi->di_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="area">Area<sup>*</sup></label>
                    <select class="form-control" name="area" id="area" required>
                        <option value="">Please Select</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="datepicker">Event Date<sup>*</sup></label>
                    <input type="text" id="datepicker" class="form-control" name="date" placeholder="Please Select" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="time">Time slot<sup>*</sup></label>
                    <select class="form-control" name="time" id="time" required>
                        <option value="">Select Time slot</option>
                        <option value="0">Full Day (09:00am - 10:00pm)</option>
                        <option value="1">Morning to Lunch (09:00am - 02:00pm)</option>
                        <option value="2">Evening to Dinner (04:00pm - 10:00pm)</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="guest">Minimum Guest<sup>*</sup></label>
                        <select class="form-control" name="guest" id="guest" required>
                            <option value="">Select Guests</option>
                            @if(!empty($guests['0']))
                            @foreach($guests as $guest)
                            <option value="{{ $guest->value }}">{{ $guest->name }}</option>
                            @endforeach
                            @endif
                       </select>
                  </div>
                    <div class="col-md-3">
                        <label for="budget">Minimum Budget<sup>*</sup></label>
                        <select class="form-control" name="budget" id="budget" required>
                            <option value="">Estimated tk/per person</option>
                            @if(!empty($budgets['0']))
                            @foreach($budgets as $budget)
                            <option value="{{ $budget->value }}">{{ $budget->name }}</option>
                            @endforeach
                            @endif
                          </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="home-continue btn btn-warning btn-block">Continue</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- body section -->
<section class="main-body">
    <div class="discover">
        <div class="container">
            <h2>Discover best venues online for your events</h2>
            <span class="divi"></span>
            <div class="row">
                <div class="col-lg-3">
                    <img src="assets/images/4_1.png" alt="">
                    <h3>Family</h3>
                    <p>Naming Cermony, Baptism, First Birthday Party, Kid's Birthday Party, Anniversary, Engagement Ceremony, Wedding</p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/images/4_2.png" alt="">
                    <h3>Social</h3>
                    <p>Get-Together, Class Reunions, Kitty Party, Bachelor Party, Christmas Party, New Year Eve Party, Valentine's Day party, Music Concerts</p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/images/4_3.png" alt="">
                    <h3>Corporate</h3>
                    <p>Corporate Parties, Annual Function, Dealers Meet, Hi-Tea, Project Party, Seminars, Team Building/Outing</p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/images/4_4.png" alt="">
                    <h3>Business</h3>
                    <p>Exhibition, Conference, Workshop, Class, Convocation, Trade fair, Trade show, Product Launch, Fashion Show</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="options">
    <div class="opt">
        <div class="container">
            <h2>Discover best venues online for your events</h2>
            <span class="divi"></span>
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/images/4_1.png" alt="">
                    <h3>Tell us what you need</h3>
                    <p>Post your event details such as the number of guests, budget, and facilities. After that, the venues come to you.</p>
                </div>
                <div class="col-lg-4">
                    <img src="assets/images/4_2.png" alt="">
                    <h3>Tell us what you need</h3>
                    <p>Post your event details such as the number of guests, budget, and facilities. After that, the venues come to you.</p>
                </div>
                <div class="col-lg-4">
                    <img src="assets/images/4_3.png" alt="">
                    <h3>Tell us what you need</h3>
                    <p>Post your event details such as the number of guests, budget, and facilities. After that, the venues come to you.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-venue">
    <div class="container">
        <h2>Most Populer Venue in Dhaka</h2>
        <span class="divi"></span>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="assets/images/v1.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="venue-details.html" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="assets/images/v2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="venue-details.html" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="assets/images/v3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="venue-details.html" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="assets/images/v4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="venue-details.html" class="btn btn-warning">Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="brand-slider">
    <div class="container">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-1"></div>
                            <div class="col-2">
                                <img class="" src="assets/images/b1.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b2.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b8.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b7.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b6.jpg" alt="Second slide">
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <img class="" src="assets/images/b5.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b4.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b3.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b2.jpg" alt="Second slide">
                            </div>
                            <div class="col-2">
                                <img class="" src="assets/images/b1.jpg" alt="Second slide">
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>             
        </div>
    </div>
</section>
@endsection