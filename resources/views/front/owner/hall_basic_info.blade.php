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
                                <div class="card" id="highlight-">
                                        <h4 class="card-header">Basic Info</h4>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Venue Name</label>
                                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Venue Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Hall/Room</label>
                                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Hall or Room">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Address</label>
                                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress2">Address 2</label>
                                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                    <label for="inputZip">Zip</label>
                                                    <input type="text" class="form-control" id="inputZip">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="file2">Upload Logo</label>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="custom-file">
                                                            <input type="file" id="file2" class="custom-file-input">
                                                            <span class="custom-file-control"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Agree All trams and condition
                                                    </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="card" id="about">
                                            <h4 class="card-header">About</h4>
                                            <div class="card-body">
                                                <p>Check availabity online for Star Banquetes,Jayanagar 4th Block, Bangalore. Star Banquetes is a banquet hall located in Jayanagar 4th Block , Bangalore .The banquet hall seating capacity is 300 and floating up to 600 can manage.This venue has car parking facility also which can park up to 20 cars. Outside food allowed at this banquet hall.Events permitted at Star Banquetes are Engagement,Wedding Reception,Birthday Party,Get Together Party,Anniversary,Kitty Party,Naming Ceremony.</p>
                                            </div>
                                        </div>
                                        <div class="card" id="policies">
                                            <h4 class="card-header">Booking policies</h4>
                                            <div class="card-body">
                                                <p>
                                                        Total Tax : 14.5 % is applicable on Food & Beverages (F&B) <br>
                                                        Advance Amount : 50% of the estimated billing amount to be paid at the time of booking to confirm the venue and remaining amount need to be paid on the day of the event
                                                </p>
        
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection