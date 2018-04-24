@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
<section class="main-body">
        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <h3>Send your query</h3>
                            <form>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Phone">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Address">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Query</label>
                                    <div class="col-sm-10">
                                        <textarea name="query" id="" cols="30" rows="10" class="form-control" placeholder="Query"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-warning btn-lg"> Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="contact-form">
                                <h3>Direct contact</h3>

                                <ul class="contact-list">
                                    <li><em aria-hidden="true" class="fa fa-map-marker"></em>
                                      <span>
                                        <strong>Bangladesh</strong> : Planners Tower,<br>
                                          Suite # 13, Level # 14, 
                                          13/A, Sonargaon Road,<br>
                                          Banglamotor, Dhaka</span>
                                    </li>
                                    <li><em aria-hidden="true" class="fa fa-map-marker"></em>
                                      <span>
                                          <strong>UK</strong> : 100 Mile End Road, London, E1 4UN, UK
                                      </span>
                                    </li>
                                    <li><em aria-hidden="true" class="fa fa-map-marker"></em>
                                      <span>
                                          <strong>USA</strong> : Jamaica Street, Newyork, NY-11432, USA
                                      </span>
                                    </li>
                                    <li><em aria-hidden="true" class="fa fa-phone"></em>
                                      <span>
                                          <strong>BD</strong>: +8801707011210<br>
                                          <strong>BD</strong>: +8801707011310<br>
                                          <strong>UK</strong>: +44(0)20 3633 1301
                                      </span>
                                    </li>
                                    <li><em aria-hidden="true" class="fa fa-envelope"></em>
                                      <span>BD : <a href="#">info@venue.com.bd</a></span><br>
                                      <span>UK : <a href="#">info-uk@venue.com.bd</a></span><br>
                                      <span>US : <a href="#">info-us@venue.com.bd</a></span>
                                    </li>
                                    <li>
                                      <em aria-hidden="true" class="fa fa-link"></em><span><a href="http://venue.com.bd/">venue.com.bd</a></span>
                                    </li>
                                  </ul>
                                
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<div id="map"></div>
@endsection