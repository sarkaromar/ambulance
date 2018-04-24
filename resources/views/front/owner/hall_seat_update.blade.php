
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
                            <div class="card" id="seat">
                                    <h4 class="card-header">Seating Arrangements</h4>
                                    <div class="card-body">
                                        <table class="table table-bordered seat" widtg="100%">
                                            <thead>
                                                <tr>
                                                    <td>Shape Name</td>
                                                    <td>Theater</td>
                                                    <td>Class</td>
                                                    <td>Cluster</td>
                                                    <td>UShape</td>
                                                    <td>Board</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shape</td>
                                                    <td><img src="{{ URL::to('assets/images/theatre-layout.png')}}" alt=""></td>
                                                    <td><img src="{{ URL::to('assets/images/class-layout.png')}}" alt=""></td>
                                                    <td><img src="{{ URL::to('assets/images/round-layout.png')}}" alt=""></td>
                                                    <td><img src="{{ URL::to('assets/images/u-layout.png')}}" alt=""></td>
                                                    <td><img src="{{ URL::to('assets/images/board-layout.png')}}" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Capacity</td>
                                                    <td>80</td>
                                                    <td>300</td>
                                                    <td>400</td>
                                                    <td>400</td>
                                                    <td>400</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input type="text" class="form-control" placeholder="Cepacity"></td>
                                                    <td><input type="text" class="form-control" placeholder="Cepacity"></td>
                                                    <td><input type="text" class="form-control" placeholder="Cepacity"></td>
                                                    <td><input type="text" class="form-control" placeholder="Cepacity"></td>
                                                    <td><input type="text" class="form-control" placeholder="Cepacity"></td>
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