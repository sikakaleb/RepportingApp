<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('partials._navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                @include('partials._sidebar')
                <!-- partial -->
                <div class="main-panel">
                    @include('partials._bodyRoyalUi')
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    @include('partials._footer')
                    <!-- partial -->
              </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
   </div>
  <!-- container-scroller -->
 
  <!-- plugins:js -->
  <script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

