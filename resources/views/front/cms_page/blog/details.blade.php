@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
<section class="main-body">
    <div class="sub-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-details">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(isset($details[0]))
                                <img src="{{ URL::to('assets/images/blog', $details[0]->blog_image) }}" alt="{{ $details[0]->blog_title }}">
                                <h3>{{ $details[0]->blog_title }}</h3>
                                <small>Date: Date: {{ date('d M, Y', strtotime($details[0]->created_at)) }} | Post by: Admin</small>
                                <p>
                                    {{ $details[0]->blog_details }}
                                </p>
                                @else
                                <div class="alert alert-danger">
                                    <strong>Sorry!</strong> There is no blog found!
                                </div>
                                @endif
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
                        @if($widgets[0])
                        @foreach($widgets as $wid_list)
                        <div class="recent-blog">
                            <img src="{{ URL::to('assets/images/blog', $wid_list->blog_image) }}" alt="">
                            <a href="{{url('/blog-details', $wid_list->blog_slug)}}"><h5>{{ $wid_list->blog_title }}</h5></a>
                            <small>Date:Date: {{ date('d M, Y', strtotime($wid_list->created_at)) }}</small>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection