@extends('front.layouts.template')

@section('content')

<!-- mainbody section -->
<section class="main-body">
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3>Send your query</h3>
                    <hr>
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Query</label>
                            <div class="col-sm-10">
                                <textarea name="query" id="" cols="30" rows="10" class="form-control" placeholder="Query"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-warning btn-lg"> Send </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <h3>
                        Direct contact
                    </h3>
                    <hr>
                    <address>
                        TIS Pvt. Ltd.
                        Jayanagar 4th Block,
                        Bangalore
                        Phone: (+91) 7676 2020 33 ext: 10#
                        Email:info@venuebooking.com
                    </address>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection