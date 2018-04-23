@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
<section class="main-body">
    <div class="sub-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-list">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>Blog title here</h3>
                                <small>Date: 02-03-2017 | Post by: Admin</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rerum beatae voluptatibus nam minus facilis</p>
                                <a href="{{url('/blog-details')}}" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="blog-list">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>Blog title here</h3>
                                <small>Date: 02-03-2017 | Post by: Admin</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rerum beatae voluptatibus nam minus facilis</p>
                                <a href="{{url('/blog-details')}}" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="blog-list">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>Blog title here</h3>
                                <small>Date: 02-03-2017 | Post by: Admin</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rerum beatae voluptatibus nam minus facilis</p>
                                <a href="{{url('/blog-details')}}" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="blog-list">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>Blog title here</h3>
                                <small>Date: 02-03-2017 | Post by: Admin</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rerum beatae voluptatibus nam minus facilis</p>
                                <a href="{{url('/blog-details')}}" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="blog-list">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>Blog title here</h3>
                                <small>Date: 02-03-2017 | Post by: Admin</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rerum beatae voluptatibus nam minus facilis</p>
                                <a href="{{url('/blog-details')}}" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-right">
                        <div class="input-group">
                            <input type="search" class="form-control search-i" placeholder="Enter your location" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <a href="venue-list.html" class="input-group-addon search-b"><i class="fa fa-search" aria-hidden="true"></i> &nbsp; <span>Search</span></a>
                        </div>
                    </div>

                    <div class="blog-right">
                        <h4>Recent Blogs</h4>
                        <div class="recent-blog">
                            <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            <a href="blog-details.html"><h5>Blog title here</h5></a>
                            <small>Date: 02-03-2017</small>
                        </div>
                        <div class="recent-blog">
                            <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            <a href="blog-details.html"><h5>Blog title here</h5></a>
                            <small>Date: 02-03-2017</small>
                        </div>
                        <div class="recent-blog">
                            <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            <a href="blog-details.html"><h5>Blog title here</h5></a>
                            <small>Date: 02-03-2017</small>
                        </div>
                        <div class="recent-blog">
                            <img src="{{url('/')}}/public/assets/images/v1.png" alt="">
                            <a href="blog-details.html"><h5>Blog title here</h5></a>
                            <small>Date: 02-03-2017</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection