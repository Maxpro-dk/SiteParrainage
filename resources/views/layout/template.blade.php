<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, assets_admin dashboard, html css dashboard, web dashboard, bootstrap 4 assets_admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny assets_admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 assets_admin template, pixel  design, pixel  dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Pixel assets_admin is powerful and clean assets_admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin</title>
  
    <link href="{{asset('assets_admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('assets_admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('assets_admin/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('assets_admin/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('assets_admin/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets_admin/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('assets_admin/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg "
                    href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i
                        class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href=""><b><img
                                src="{{asset('assets_admin/plugins/images/pixelassets_admin-logo.png')}}" alt="home" /></b><span
                            class="hidden-xs"></span></a>
                </div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                         
                     
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> 
                            <i width="36" class="fa fa fa-user img-circle mr-1"></i> <b class="hidden-xs">{{Auth::user()->name}}</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="{{route('dashboard')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{route('admin_profile')}}" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Profil</span></a>
                    </li>
                   
                    
                    
                </ul>
                <div class="center p-20">
                    <form method="post" action="{{route("adminLogout")}}">
                        @csrf
                    <span class="hide-menu"><button target="_blank" type="submit"
                            class="btn btn-danger btn-block btn-rounded waves-effect waves-light">
                                Se deconnecter
                           </button></span>
                    </form>
                </div>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                
                @yield("content_title")
            
              
               
                @yield('content')
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Pixel assets_admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('assets_admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets_admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('assets_admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('assets_admin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets_admin/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{asset('assets_admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{asset('assets_admin/plugins/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/bower_components/morrisjs/morris.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets_admin/js/custom.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/dashboard1.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Welcome',
                text: ' Merci pour la visite de notre site',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'info',
                hideAfter: 3500,
                stack: 6
            })
        });
    </script>
</body>

</html>