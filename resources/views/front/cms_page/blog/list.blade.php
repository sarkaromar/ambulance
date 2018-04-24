@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
<section class="main-body">
    <div class="sub-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @if(isset($blogs[0]))
                    @foreach($blogs as $list)
                    <div class="blog-list">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::to('assets/images/blog', $list->blog_image) }}" alt="{{ $list->blog_title }}">
                            </div>
                            <div class="col-lg-8">
                                <h3>{{ $list->blog_title }}</h3>
                                <small>Date: {{ date('d M, Y', strtotime($list->created_at)) }} | Post by: Admin</small>
                                <p>
                                @php
                                $a = $list->blog_details;
                                if (strlen($a) > 120) {
                                    $stringCut = substr($a, 0, 120);
                                    echo $stringCut . " ...";
                                } else {
                                    echo $a;
                                }
                                @endphp
                                </p>
                                <a href="{{url('/blog-details', $list->blog_slug)}}" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                    </div>
                    {{ $blogs->links() }}
                    @endforeach
                    @else
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> There is no blog!
                    </div>
                    @endif
                </div>
                <div class="col-lg-3">
                    <div class="blog-right">
                        <h4>Latest Blogs</h4>
                        @if(isset($widgets))
                        @foreach($widgets as $wid_list)
                        <div class="recent-blog">
                            <img src="{{ URL::to('assets/images/blog', $wid_list->blog_image) }}" alt="{{ $wid_list->blog_title }}">
                            <a href="{{url('/blog-details', $wid_list->blog_slug)}}"><h5>{{ $wid_list->blog_title }}</h5></a>
                            <small>Date: {{ date('d M, Y', strtotime($wid_list->created_at)) }}</small>
                        </div>
                        @endforeach
                        <p>There is no latest blog!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection