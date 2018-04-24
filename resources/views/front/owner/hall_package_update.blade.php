
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
                            <div class="card" id="packages">
                                    <h4 class="card-header">Packages</h4>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Packages 1</td>
                                                    <td>Packages 2</td>
                                                    <td>Packages 3</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>200</td>
                                                        <td>100</td>
                                                        <td>400</td>
                                                    </tr>
                                                    <tr>
                                                        <td>80</td>
                                                        <td>300</td>
                                                        <td>400</td>
                                                    </tr>
                                                    <tr>
                                                        <td>80</td>
                                                        <td>300</td>
                                                        <td>400</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="btn btn-warning">Details</a></td>
                                                        <td><a class="btn btn-warning">Details</a></td>
                                                        <td><a class="btn btn-warning">Details</a></td>
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