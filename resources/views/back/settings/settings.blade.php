@extends('back.layouts.admin_template')

@section('admin-content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>{{ $title }}</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin Panel</a></li>
            <li class="active">{{ $title }}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $title }}</h3>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        <strong>Thanks!</strong> {{Session::get('success')}}
                    </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/update-settings/') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-md-8">
                                <img src="{{ URL::to('photo/logo', $setting->setting_logo) }}" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Logo</label>
                            <div class="col-md-8">
                                <input class="form-control" type="file" name="image" >
                                <input type="hidden" name="old_image" value="{{ $setting->setting_logo }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone 01</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_phone1" value="{{ $setting->setting_phone1 }}" placeholder="phone 01" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone 02</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_phone2" value="{{ $setting->setting_phone2 }}" placeholder="phone 02" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">email 01</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="setting_email1" value="{{ $setting->setting_email1 }}" placeholder="email 01" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">email 02</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="setting_email2" value="{{ $setting->setting_email2 }}" placeholder="email 02" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Address 01</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="setting_address1" rows="2">{{ $setting->setting_address1 }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Address 02</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="setting_address2" rows="2">{{ $setting->setting_address2 }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Facebook Link</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_fb" value="{{ $setting->setting_fb }}" placeholder="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Skype Link</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_skype" value="{{ $setting->setting_skype }}" placeholder="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Twitter Link</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_twitter" value="{{ $setting->setting_twitter }}" placeholder="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Google plus Link</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_youtube" value="{{ $setting->setting_youtube }}" placeholder="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Instagram Link</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_instagram" value="{{ $setting->setting_instagram }}" placeholder="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Total Ambulance</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_total_amb" value="{{ $setting->setting_total_amb }}" placeholder="total" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Total Driver</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_total_driver" value="{{ $setting->setting_total_driver }}" placeholder="total" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Total Client</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_total_client" value="{{ $setting->setting_total_client }}" placeholder="total" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Total Day</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="setting_total_day" value="{{ $setting->setting_total_day }}" placeholder="total" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Home Text</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="content" rows="15" placeholder="home text" required>{!! old('content', $content) !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-check-square-o"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection