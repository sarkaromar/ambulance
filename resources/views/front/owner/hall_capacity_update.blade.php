@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
    <div class="venue-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    @include('front.owner.left_menu')
                </div>
                <div class="col-lg-10">
                    <div class="user-body-sec grid">
                            <div class="card" id="capacity">
                                    <h4 class="card-header">Capacity</h4>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Minimum</td>
                                                    <td>Floating Capacity</td>
                                                    <td>Maximum Seating</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder="Minimum Cepacity"></td>
                                                    <td><input type="text" class="form-control" placeholder="Floating Cepacity"></td>
                                                    <td><input type="text" class="form-control" placeholder="Maximum Cepacity"></td>
                                                    <td><a class="btn btn-info" href="#">Save</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection