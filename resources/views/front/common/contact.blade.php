@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
    <div class="page-header nevy-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Contact</h2>
                    <p class="page-description yellow-color">Contact With Us</p>        
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
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.Social-icon -->
                        </div><!-- /.contact -->
                    </div><!-- /.contactus-content-left -->
                </div><!-- /.col-md-4 -->
                
                <div class="col-md-8">
                    <div class="contact-us-content-right">
                        <form action="#">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <div class="input-content clearfix">
                                <h4>Send Us A email</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Name*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="email" placeholder="Email*" class="form-control Email">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-md-12">
                                        <input type="search" placeholder="Website*" class="form-control website">
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <textarea rows="2" cols="80">your massage</textarea>
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