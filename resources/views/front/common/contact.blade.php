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
    </div><!-- /.page-header --> 

    <!-- ====== Page Header ====== -->
    <div class="contact-us-area mr-top-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-three">
                        <h2 class="title">Contact us</h2>
                    </div><!-- /.section-title-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-us-content-left">
                        <div class="contact">
                            <br>
                            <br>
                            <h4><i class="fa fa-map-marker"></i>Address</h4>
                            <p>Hospital Road, Maijdee, <br>Noakhali.</p>
                        </div><!-- /.contact -->
                        
                        <div class="contact">
                            <h4><i class="fa fa-phone"></i>Call</h4>
                            <p>+88 1885-090000</p>
                        </div><!-- /.contact -->

                        <div class="contact">
                            <h4><i class="fa fa-envelope"></i>Mail</h4>
                            <p>maamonics@gmail.com</p>
                        </div><!-- /.contact -->

                        <div class="contact">
                            <h4><i class="fa fa-user-circle"></i>Social account</h4>
                            <div class="social-icon">
                                <a href="{{ $setting[0]->setting_fb }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $setting[0]->setting_skype }}"><i class="fa fa-skype"></i></a>
                                <a href="{{ $setting[0]->setting_twitter }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ $setting[0]->setting_instagram }}"><i class="fa fa-instagram"></i></a>
                                <a href="{{ $setting[0]->setting_youtube }}"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.Social-icon -->
                        </div><!-- /.contact -->
                    </div><!-- /.contactus-content-left -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        <strong>Thanks!</strong> {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="contact-us-content-right">
                        <form action="{{ route('send') }}" method="POST">
                            {{ csrf_field() }}
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <div class="input-content clearfix">
                                <h4>Send Us A email</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="your full name*" class="form-control" required>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="email" name="email" placeholder="your email*" class="form-control Email" required>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-md-12">
                                        <input type="text" name="subject" placeholder="your subject*" class="form-control" required>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <textarea rows="4" name="massage" placeholder="your massage*" required></textarea>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit" value="Submit" class="submit blue-button">
                                </div><!-- /.subimt -->
                            </div><!-- /.input-content -->
                        </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us -->

    <!-- ====== Map Block ====== -->
    <div class="map-block mr-btm-78">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="heading-content style-two">
                       <h3 class="subtitle">Find Our location</h3>
                    </div><!-- /.about-heading-content -->
                        <div class="header-map-content">
                            <iframe height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14704.575431052894!2d91.09197060503331!3d22.871143619545165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754a4f6b2ec3221%3A0x58830f21dbc0f888!2sHospital+Rd%2C+Maijdee!5e0!3m2!1sen!2sbd!4v1524156575414" allowfullscreen="allowfullscreen"></iframe>
                            
                        </div><!-- /.map-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.map-area -->
@endsection