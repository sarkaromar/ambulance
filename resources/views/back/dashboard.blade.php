@extends('back.layouts.admin_template')

@section('admin-content')
<!-- /content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin Panel</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- members and users -->
        <div class="row">
            <!-- active member -->
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="small-box bg-aqua-gradient">
                    <div class="inner">
                        <h3>9999 <sup style="font-size: 20px">People</sup></h3>
                        <p>Active Members</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <a href="" class="small-box-footer">See List &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- site users -->
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="small-box bg-green-gradient">
                    <div class="inner">
                        <h3>9999 <sup style="font-size: 20px">People</sup></h3>
                        <p>Site Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <a href="" class="small-box-footer">See List &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- inactive members -->
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="small-box bg-red-gradient">
                    <div class="inner">
                        <h3>9999 <sup style="font-size: 20px">People</sup></h3>
                        <p>Inactive Members</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-user-times"></i>
                    </div>
                    <a href="" class="small-box-footer">See List &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- collection and due -->
        <div class="row">
            <!-- collection of this month -->
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="small-box bg-aqua-gradient">
                    <div class="inner">
                        <h3>9999 <sup style="font-size: 20px">BDT</sup></h3>
                        <p>Collection of this Month</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-money"></i>
                    </div>
                    <a href="" class="small-box-footer">See List &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- due of this month -->
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="small-box bg-yellow-gradient">
                    <div class="inner">
                        <h3>9999 <sup style="font-size: 20px">BDT</sup></h3>
                        <p>Due of this Month</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-money"></i>
                    </div>
                    <a href="" class="small-box-footer">See List &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- total Due -->
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="small-box bg-red-gradient">
                    <div class="inner">
                        <h3>9999 <sup style="font-size: 20px">BDT</sup></h3>
                        <p>Total Due</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-money"></i>
                    </div>
                    <a href="" class="small-box-footer">See List &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- extra information -->
    </section>
</div>
<!-- /content -->
@endsection