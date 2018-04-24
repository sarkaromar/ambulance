
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
                            <div class="card" id="suitedfor">
                                    <h4 class="card-header">Suited for</h4>
                                    <div class="card-body">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Anniversary</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Baby Shower</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Bachelor Party</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Baptism</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Birthday Party</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Engagement</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Get-Together</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Kitty Party</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Naming Cermony</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Reception</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Sangeet</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Upanayanam</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Wedding / Marriage</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Annual Function</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Board Meetings</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Exhibition</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Seminars</label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input"><i class="fa fa-tag"></i> Team Meeting</label> 
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection