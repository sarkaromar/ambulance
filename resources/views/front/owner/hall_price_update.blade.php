
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
                            <div class="card" id="price-">
                                    <h4 class="card-header">Hall Settings</h4>
                                    <div class="card-body">
                                        <h5>Add Hall Rooms</h5>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Room name: 01</td>
                                                <td>Room Type: Party, Wedding</td>
                                                <td>Cepacity: 100 Person</td>
                                                <td>Rant: 10000/day</td>
                                                <td><a href="#" class="btn btn-info"><i class="fa fa-plus"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Room Name"></td>
                                                <td><input type="text" class="form-control" placeholder="Room Type"></td>
                                                <td><input type="text" class="form-control" placeholder="Room Cepacity"></td>
                                                <td><input type="text" class="form-control" placeholder="Room rant"></td>
                                                <td><a href="#" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                            </tr>
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