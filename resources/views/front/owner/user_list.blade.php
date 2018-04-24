@extends('front.layouts.template')

@section('content')

<!-- mainbody section -->
    <section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.owner.left_menu')
                    </div>
                    <div class="col-lg-10">
                        <div class="user-body-sec grid">
                            @if(isset($users_list))
                            <div class="alert alert-danger">
                                <strong>Sorry!</strong> Invalid Details!
                            </div>
                            @else
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th width="5%">User</th>
                                        <th width="15%">User Name</th>
                                        <th width="15%">Email</th>
                                        <th width="15%">Contact no</th>
                                        <th width="15%">User Type</th>
                                        <th width="35%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users_list as $user) 
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox">
                                            </div>
                                        </td>
                                        <td><img width="50" src="{{URL::to('assets/images/profile.jpg') }}" alt="User image"></td>
                                        <td>{{ $user->user_full_name }}</td>
                                        <td>{{ $user->user_email }}</td>
                                        <td>{{ $user->user_phone }}</td>
                                        <td>User</td>
                                        <td>
                                            <div class="float-right">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                <!-- <button type="button" class="btn btn-secondary">Middle</button>
                                                <button type="button" class="btn btn-secondary">Right</button>
                                                <button type="button" class="btn btn-secondary">Right</button>
                                                <button type="button" class="btn btn-secondary">Right</button> -->
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection