<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FRÄSCHBIL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <link href="{{asset('js/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('js/lib/tempusdominus/css/tempusdominus-bootstrap-4.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->

    <link href="{{asset('css/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                @include('admin.navbar')
            <!-- Navbar End -->


            <!-- Blank Start -->

            <div class="container-fluid pt-4 px-4">
                @yield('content')

            </div>
            <!-- Blank End -->


            <!-- Footer Start -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="{{asset('js/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('js/lib/easing/easing.min.js')}}"></script>

    <script src="{{asset('js/lib/waypoints/waypoints.min.js')}}"></script>

    <script src="{{asset('js/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('js/lib/tempusdominus/js/moment.min.js')}}"></script>

    <script src="{{asset('js/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>

    <script src="{{asset('js/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/js/main.js')}}"></script>

    @stack('customejs')
</body>

</html>
