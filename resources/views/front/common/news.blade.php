@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
<div class="page-header nevy-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">News</h2>
                <p class="page-description yellow-color">Maa-Moni Ambulance</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div>
<!-- ======blog-area====== --> 
<div class="blog-block bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-content-left">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                @if(isset($news[0]))
                                @foreach($news as $new)
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <article class="post">
                                        <figure class="post-thumb">
                                            <a href="{{ url('news-details', $new->news_id) }}">
                                                <img src="{{ URL::to('photo/news', $new->news_image) }}" alt="{{ $new->news_title }}" />
                                            </a>
                                        </figure><!-- /.post-thumb -->
                                        <div class="post-content">  
                                            <h2 class="entry-title">
                                                <a href="{{ url('news-details', $new->news_id) }}">{{ $new->news_title }}</a>
                                            </h2><!-- /.entry-title -->
                                        </div><!-- /.post-content -->
                                    </article><!-- /.post -->
                                </div><!-- /.col-md-6 -->
                                @endforeach()
                                @endif()
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                {{ $news->links() }}
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div> <!-- /.home -->
                    </div> <!-- /.tab-content -->
            </div><!-- /.blog-content-left -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-main-content -->
@endsection