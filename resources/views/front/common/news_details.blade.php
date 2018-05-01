@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
<div class="page-header nevy-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">News Details</h2>
                <p class="page-description yellow-color">Maa-Moni Ambulance</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div>
<!-- ======blog-area====== --> 
<div class="blog-single-block bg-gray-color pd-btm-60">
    <div class="container">
        <div class="row">
            <!-- Blog single Content -->
            <div class="col-md-12">
                <div class="single-main-content">
                    <article class="post-content">
                        <div class="entry-header">
                            <h2 class="entry-title">{{ $news->news_title }}</h2>
                        </div><!-- /.entry-header -->
                        <figure class="post-thumb">
                            <img src="{{ URL::to('photo/news', $news->news_image) }}" alt="{{ $news->news_title }}">
                        </figure><!-- /.post-thumb -->
                        <div class="single-post">
                            <div class="entry-meta">
                                <div class="entry-date">
                                    <div class="meta-title">Date</div> 
                                    <a href="#"><?php $date = date('d-M-Y', strtotime($news->created_at)); echo $date; ?></a>
                                </div>       
                            </div><!-- /.entry-meta -->
                            <div class="entry-content">
                                <p>{{ $news->news_desc }}</p>
                            </div><!-- /.entry-content -->
                        </div><!-- /.single-post -->
                        <div class="entry-share">
                            <span class="meta-name">Share:</span>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div><!-- /.entry-share -->
                    </article><!-- /.post -->
                </div><!-- /.single-main -->
            </div><!-- /.col-md-8 --> 
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-main-content -->
@endsection