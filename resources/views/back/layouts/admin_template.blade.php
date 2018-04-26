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
        <link rel="stylesheet" href="{{ URL::to('assets/back/plugins/select2/select2.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/back/plugins/tagsinput/bootstrap-tagsinput.css') }}">
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
                        <li class="treeview <?php if ($menu == 'dash' ) echo 'active' ?>">
                            <a href="{{ url('/admin/dashboard') }}" >
                                <i class="fa fa-dashboard fa-lg"></i><span> &nbsp;Dashboard</span>
                            </a>
                        </li>
                        <!-- booking list -->
                        <li class="treeview <?php if ($menu == 'post_cat') echo 'active' ?>">
                            <a href="{{ url('/admin/booking') }}" >
                                <i class="fa fa-list-ul fa-lg"></i><span> &nbsp;Booking List</span>
                            </a>
                        </li>
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
        <script src="{{ URL::to('assets/back/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/plugins/tagsinput/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/dist/js/demo.js') }}"></script>
        <script src="{{ URL::to('assets/back/js/common.js') }}"></script>
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