<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{$title}}</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="{{ URL::to('assets/back/favicon.ico') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ URL::to('assets/back/bootstrap/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ URL::to('assets/back/extra/font-awesome.min.css') }}" >
        <link rel="stylesheet" href="{{ URL::to('assets/back/extra/ionicons.min.css') }}" >
        <link rel="stylesheet" href="{{ URL::to('assets/back/plugins/datatables/dataTables.bootstrap.css') }}">
        <!-- <link rel="stylesheet" href="{{ URL::to('assets/back/plugins/select2/select2.min.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ URL::to('assets/back/plugins/tagsinput/bootstrap-tagsinput.css') }}"> -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ URL::to('assets/back/dist/css/AdminLTE.min.css') }}" >
        <link rel="stylesheet" href="{{ URL::to('assets/back/dist/css/skins/_all-skins.min.css') }}" >
        <link rel="stylesheet" href="{{ URL::to('assets/back/css/custom.css') }}" >
        <!--[if lt IE 9]>
        <script src="{{ URL::to('assets/back/extra/html5shiv.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/extra/respond.min.js') }}"></script>
        <![endif]-->
        <script>
            function check() {
                var chk = confirm("Are you sure want to do this?");
                if (chk) {
                    return true;
                } else {
                    return false;
                }
            }
            var BASE_URL = '{{ url('/') }}';
        </script>
    </head>
    <body class="sidebar-mini skin-blue fixed">
        <!-- wrapper -->
        <div class="wrapper">
            <!-- header -->
            <header class="main-header">
                <a href="{{ url('/admin/dashboard') }}" class="logo">
                    <span class="logo-mini"><b>Ambulance</b></span>
                    <span class="logo-lg"><b>Ambulance</b></span>
                </a>
                <!-- navbar -->
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- user account -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <span class="hidden-xs"><?=Auth::user()->name?> &nbsp; As &nbsp;
                                        <?php
                                        if (Auth::user()->level == 1) { 
                                            echo '<span class="label label-success">Manager</span>';
                                        } elseif (Auth::user()->level == 2) {
                                            echo '<span class="label label-danger">Super Admin</span>';
                                        }
                                        ?>
                                    </span> 
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- user image -->
                                    <li class="user-header">
                                        <p><?=Auth::user()->name?><b><?=Auth::user()->email?></b></p>
                                    </li>
                                    <!-- user footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-sign-out"></i><span>Logout</span></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- /header -->
            <!-- aside -->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <!-- dashboard -->
                        <li class="treeview <?php if ($menu == 'dashboard' ) echo 'active' ?>">
                            <a href="{{ url('/admin/dashboard') }}" >
                                <i class="fa fa-dashboard fa-lg"></i><span> &nbsp;Dashboard</span>
                            </a>
                        </li>
                        <!-- booking list -->
                        <li class="treeview <?php if ($menu == 'booking') echo 'active' ?>">
                            <a href="{{ url('/admin/booking') }}" >
                                <i class="fa fa-list-ul fa-lg"></i><span> &nbsp;Booking List</span>
                            </a>
                        </li>
                        <!-- service Content -->
                        <li class="treeview <?php if ($menu == 'service') echo 'active' ?>">
                            <a href="{{ url('/admin/service') }}" >
                                <i class="fa fa-list-ul fa-lg"></i><span> &nbsp;Service Content</span>
                            </a>
                        </li>
                        <!-- dynamic content -->
                        <li class="treeview <?php if($menu == 'dynamic' ) echo 'active' ?>">
                            <a href="#">
                                <i class="fa fa-fw fa-edit fa-lg"></i><span> &nbsp;Dynamic Content</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if (isset($submenu) && $submenu == 'slider' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/slider')}}"><i class="fa fa-caret-right"></i> Slider</a>
                                </li>
                                <li class="<?php if (isset($submenu) && $submenu == 'news' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/news')}}"><i class="fa fa-caret-right"></i> News</a>
                                </li>
                                <li class="<?php if (isset($submenu) && $submenu == 'driver' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/driver')}}"><i class="fa fa-caret-right"></i> Driver</a>
                                </li>
                                <li class="<?php if (isset($submenu) && $submenu == 'testimonial' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/testimonial')}}"><i class="fa fa-caret-right"></i> Testimonial</a>
                                </li>
                                <li class="<?php if (isset($submenu) && $submenu == 'faq' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/faq')}}"><i class="fa fa-caret-right"></i> FAQ</a>
                                </li>
                            </ul>
                        </li>
                        <!-- CMS page -->
                        <li class="treeview <?php if($menu == 'cms' ) echo 'active' ?>">
                            <a href="#">
                                <i class="fa fa-fw fa-edit fa-lg"></i><span> &nbsp;CMS Page</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if (isset($submenu) && $submenu == 'about' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/about')}}"><i class="fa fa-caret-right"></i> About us</a>
                                </li>
                                <li class="<?php if (isset($submenu) && $submenu == 'rants' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/rants')}}"><i class="fa fa-caret-right"></i> Rants</a>
                                </li>
                                <li class="<?php if (isset($submenu) && $submenu == 'tnc' ) echo 'active' ?>">
                                    <a href="{{ url('/admin/tnc')}}"><i class="fa fa-caret-right"></i> Terms& Cond.</a>
                                </li>
                            </ul>
                        </li>
                        <!-- subscriber -->
                        <li class="treeview <?php if ($menu == 'subscriber') echo 'active' ?>">
                            <a href="{{ url('/admin/subscriber') }}" >
                                <i class="fa fa-users fa-lg"></i><span> &nbsp;Subscriber List</span>
                            </a>
                        </li>
                        <!-- settings -->
                        <li class="treeview <?php if ($menu == 'settings') echo 'active' ?>">
                            <a href="{{ url('/admin/settings') }}" >
                                <i class="fa fa-gear fa-lg"></i><span> &nbsp;Settings</span>
                            </a>
                        </li> 
                        <!-- other link goes here  -->
                    </ul>
                </section>
            </aside>
            <!-- /aside -->
            @yield('admin-content')
        </div>
        <!-- /wrapper -->
        <footer class="main-footer">
            <div class="pull-right">
                <p><?=date('Y');?> &copy; {{ config('app.name') }} | First Phase : <b>beta version</b></p>
            </div>
        </footer>
        <!-- Script -->
        <script src="{{ URL::to('assets/back/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- <script src="{{ URL::to('assets/back/plugins/select2/select2.full.min.js') }}"></script> -->
        <!-- <script src="{{ URL::to('assets/back/plugins/tagsinput/bootstrap-tagsinput.min.js') }}"></script> -->
        <script src="{{ URL::to('assets/back/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/dist/js/app.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ URL::to('assets/back/dist/js/demo.js') }}"></script>

        <!-- tinymce with laravel file manager  -->
        <script>
            var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
        </script>
        <!-- TinyMCE init -->
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
            var editor_config = {
              path_absolute : "",
              selector: "textarea[name=content]",
              plugins: [
                "link image code",
              ],
              relative_urls: false,
              height: 350,
              file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
                if (type == 'image') {
                  cmsURL = cmsURL + "&type=Images";
                } else {
                  cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                  file : cmsURL,
                  title : 'Filemanager',
                  width : x * 0.8,
                  height : y * 0.8,
                  resizable : "yes",
                  close_previous : "no"
                });
              }
            };

            tinymce.init(editor_config);
        </script>
        <script>
            {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
        </script>
        <script>
            $('#lfm').filemanager('image', {prefix: route_prefix});
            $('#lfm2').filemanager('file', {prefix: route_prefix});
        </script>
        <!-- for common datepicker -->
        <script>
            $( function() {
                $( "#jquery_datepicker" ).datepicker({
                    minDate: 0,
                    dateFormat: 'yy-mm-dd'
                });
            });
        </script>
        <!-- for booking table date picker -->
        @if(isset($bookinglists[0]))
        @foreach($bookinglists as $list)
        <script>
            $( function() {
                $( "#jquery_datepicker_{{ $list->booking_id }}" ).datepicker({
                    minDate: 0,
                    dateFormat: 'yy-mm-dd'
                });
            });
        </script>
        @endforeach
        @endif
        <!-- for data table -->
        <script>
          $(function () {
            $('#data_table').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true,
              "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Show All"]]
            });
          });
        // global message
        $(document).ready (function(){
            $(".alert-dismissable").fadeTo(2000, 500).fadeOut(500, function(){
                $(".alert-dismissable").alert('close');
            });
        });
        </script>
    </body>
</html>