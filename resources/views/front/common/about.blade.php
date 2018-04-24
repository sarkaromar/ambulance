@extends('front.layouts.template')

@section('content')
<!-- ====== Page Header ====== -->
<div class="page-header nevy-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">About</h2>
                <p class="page-description yellow-color">About your company</p>        
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content-three">
                                <h2 class="title">Why <br />Choose Us</h2>
                                <h4 class="sub-title">Ambulance Information</h4>
                            </div><!-- /.section-title-area -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="extra-big-title">Best Ambulance Service </h2>
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-6">
                            <div class="about-content-left">
                                <p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia laciunia viverra. Nullram nec est et lorem sodales ornare a in sapien. In trtset urna marximus, conse ctetur iligula in, gravida erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae iaculis condim rtweentum, massa nisl cursus sapien, gravida ultrices nisi dolor non erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae dolor vitae iaculis condim rtweentum.</p>
                                <p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia.</p>
                            </div><!-- /.about-content-left-->
                        </div><!-- /.col-md-5 -->
                        <div class="col-md-6">
                            <img src="assets/images/ambulance/a1.png" alt="car-item" />
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->
                </div><!-- /.top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.about-main-content -->

<!-- ======driver block======= --> 
<div class="driver-block pd-t-54 pd-btm-72">
    <div class="container">
        <div class="row tb default-margin-bottom yellow-theme">
            <div class="col-md-9 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle">Full Time and Part Time </h3>
                    <h2 class="title">Our Drivers</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-10 -->
            <div class="col-md-3 block-navigation-area hidden-xs tb-cell">
                <div class="pull-right">                    
                    <div class="item-navigation">
                        <a href="#" class="previous-item">
                            <i class="fa fa-angle-left"></i> 
                        </a>

                        <a href="#" class="next-item">
                            <i class="fa fa-angle-right"></i> 
                        </a>
                    </div><!-- /.item-navigation -->
                </div><!-- /.pull-right -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row --> 

        <div class="driver-carousel slider-style-two owl-carousel" data-item="[4,2,2,1]">
            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-01.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                       <h2 class="driver-name vehicle-title"><a href="#">Mr. Sagor Smith</a></h2>
                        <h4 class="driver-desc">Full Time Work,  Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->

            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-02.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                       <h2 class="driver-name vehicle-title"><a href="#">Mr. Sagor Smith</a></h2>
                        <h4 class="driver-desc">Full Time Work,  Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->
            
            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-03.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                       <h2 class="driver-name vehicle-title"><a href="#">Mr. Sagor Smith</a></h2>
                        <h4 class="driver-desc">Full Time Work,  Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->

            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-04.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                       <h2 class="driver-name vehicle-title"><a href="#">Mr. Sagor Smith</a></h2>
                        <h4 class="driver-desc">Full Time Work,  Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->
        </div><!-- /.driver-carousel -->
    </div><!-- /.container  -->
</div><!-- /.driver-area -->
@endsection