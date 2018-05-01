@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
    <div class="page-header nevy-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">{{ $title }}</h2>
                    <p class="page-description yellow-color">মা-মনি অ্যাম্বুলেন্স</p>        
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
                        
                <div class="">
                        <div class="block-title-area tb-cell">
                            <div class="heading-content style-one border">
                                <h3 class="subtitle">মা-মনি অ্যাম্বুলেন্স</h3>
                                <h2 class="title">প্রায়শই জিজ্ঞাসিত <span>প্রশ্নাবলী</span></h2>
                                <br>
                            </div><!-- /.heading-content-one -->
                        </div><!-- /title -->
                        <div class="faq-accordion">
                            <div class="accordion">
                                <div class="panel-group" id="accordion">
                                @if(isset($faqs[0]))
                                <?php $x = 0; foreach($faqs as $faq) { $x++; ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading theme-blue">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $x }}">
                                                    <i class="fa fa-plus"></i>
                                                    <span>{{ $faq->faq_question }}</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse_{{ $x }}" class="panel-collapse collapse @php if($x == 1){ echo 'in';} @endphp">
                                            <div class="panel-body">
                                                <p class="accordion-details">{{ $faq->faq_answer }}</p>
                                            </div>
                                        </div> 
                                    </div> 
                                    <?php } ?>
                                    @else
                                    <!-- empty data -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading theme-blue">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#">
                                                    <i class="fa fa-plus"></i>
                                                    <span>No Question</span>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    @endif  
                                </div><!-- /.panel-group -->
                            </div><!-- /.accordion -->
                        </div><!-- /.faq-accordion -->
                    </div><!-- /.col-md-6 -->
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <br>
        <br>
        <br>
    </div><!-- /.about-main-content -->
@endsection