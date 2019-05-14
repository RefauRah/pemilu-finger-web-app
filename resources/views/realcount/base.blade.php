<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('/assets/admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('/assets/admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('/assets/admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('/assets/admin/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('realcount.header_mobile')
        <!-- END HEADER MOBILE-->

        <!-- SIDEBAR -->
        @include('realcount.sidebar')
        <!-- END SIDEBAR -->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('realcount.header_desktop')
            <!-- END HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h1 class="mb-5 text-center">Aplikasi Pemilu Ketua RT</h1>
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

            <!-- FOOTER -->
            @include('realcount.footer')
            <!-- END FOOTER -->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="{{url('/assets/admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('/assets/admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('/assets/admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{url('/assets/admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('/assets/admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{url('/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{url('/assets/admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('/assets/admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{url('/assets/admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('/assets/admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{url('/assets/admin/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{url('/assets/admin/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
