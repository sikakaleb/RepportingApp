<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Report App</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('vendors/ti-icons/css/themify-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendors/base/vendor.bundle.base.css')); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <!-- endinject -->
  <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>" />
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }
    .table-responsive {
        margin: 30px 0;
    }
    .table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
        min-width: 100%;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
    .search-box input:focus {
        border-color: #3FBAE4;
    }
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
    table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
    .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }    
    </style>
    <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('ingenieur.partials._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <?php echo $__env->make('ingenieur.partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- partial -->
                <div class="main-panel">
                    <!-- content-wrapper ends -->
                    <?php echo $__env->yieldContent('dashboard'); ?>
                    <!-- partial:partials/_footer.html -->
                    <?php echo $__env->make('ingenieur.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php /**PATH C:\laragon\www\reportingApp\resources\views/ingenieur/layouts/dashboard.blade.php ENDPATH**/ ?>