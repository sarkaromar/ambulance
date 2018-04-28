@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
<div class="page-header nevy-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">{{ $title }}</h2>
                <p class="page-description yellow-color">Maa-Moni Ambulance</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div>
<!-- ====== About Main Content ====== --> 
<div class="about-main-content mr-top-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-top-content">
                    {!! $content !!}
                </div><!-- /.top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.about-main-content -->
@endsection