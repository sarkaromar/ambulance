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
                                <img src="{{url('/')}}/public/assets/images/v1.png" alt="">

                                <h3>Blog title here</h3>
                                <small>Date: 02-03-2017 | Post by: Admin</small>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rerum beatae voluptatibus nam minus facilis</p>
                                <p>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora minima enim ipsam obcaecati provident numquam! Doloribus nihil fugit quidem incidunt omnis. Cum quam quasi odio voluptas eum quaerat nulla ullam?</span>
                                    <span>Nisi inventore, sed laudantium esse asperiores minus. Dolores, voluptatibus nulla. Officia quos harum facilis impedit, iste ea aut consequatur? Eum nobis aspernatur id, esse cumque velit obcaecati necessitatibus impedit molestias.</span>
                                    <span>Voluptas labore doloribus officia assumenda modi! Animi sit, modi recusandae obcaecati hic itaque exercitationem temporibus molestias ut, consequuntur eius ea porro, autem rerum. Debitis, modi id. Ut non atque sunt.</span>
                                    <span>Tempora praesentium illo at consequatur culpa et perspiciatis, error omnis dolores, id harum minus? Cum dolore perferendis, eveniet magni quisquam corporis molestiae similique cumque reiciendis voluptates inventore mollitia at debitis.</span>
                                    <span>Quod at doloremque modi adipisci cumque facilis sit eum impedit. Praesentium, tempore. Obcaecati illo dignissimos assumenda corrupti. Ratione quibusdam sit placeat! Veritatis dolor quis possimus eaque consequuntur dolorem atque suscipit!</span>
                                </p>
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