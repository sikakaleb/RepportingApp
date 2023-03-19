<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('vendors/ti-icons/css/themify-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendors/base/vendor.bundle.base.css')); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('partials._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <?php echo $__env->make('partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- partial -->
                <div class="main-panel">
                    <?php echo $__env->yieldContent('dashboard'); ?>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- partial -->
              </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
   </div>
  <!-- container-scroller -->
 
  <!-- plugins:js -->
  <script src="<?php echo e(asset('vendors/base/vendor.bundle.base.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo e(asset('vendors/chart.js/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.cookie.js')); ?>" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('js/template.js')); ?>"></script>
  <script src="<?php echo e(asset('js/todolist.js')); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
  <!-- End custom js for this page-->
</body>

</html>

<?php /**PATH C:\laragon\www\reportingApp\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>