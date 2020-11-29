
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Alerts | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="{{url('css/app.css')}}">

</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


  @include('layouts.admin.components.navbar')

  @include('layouts.admin.components.sidebar')



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            @yield('content')
        </div>
        <!-- End Page-content -->


        @include('layouts.admin.components.footer')
    </div>
    <!-- end main content-->


</div>

<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{url('js/app.js')}}"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>
