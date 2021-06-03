<?php
  include "config.php";
  if(!isset($_SESSION['uname']))
  {
    header('location:login.php'); 
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GK | Dashboard

  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


  
</head>


<body class="hold-transition sidebar-mini">

  <?php 
      include("Navbar.php");
  ?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          <div class="col-sm-6">
            <ol class="breadcrumb float-left">
              
              <span class="breadcrumb-item active fa fa-home">&nbsp; Dashboard</span>
            </ol>
          </div>  
        </div>
        <div class="row" style="margin-top:30px; ">
            <!-- col -->
            <div class="col-md-3 col-sm-6">
              <a href="listcategory.php">
                <div class="info-box bg-blue">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-list"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Category</span>
                    <span class="info-box-number"></span>
                  </div>
                </div>
              </a>
            </div>
            <!-- END: col -->
            <!-- col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="list_othercategory.php">
                <div class="info-box bg-red">
                  <span class="info-box-icon bg-red"><i class="fa fa-certificate"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Other Category</span>
                    <span class="info-box-number"></span>
                  </div>
                </div>
              </a>
            </div>
            <!-- END: col -->
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
            <!-- END: fix for small devices only -->
            <!-- col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="Listquestion.php">
                <div class="info-box bg-green">
                  <span class="info-box-icon bg-green"><i class="fa fa-question"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Questions</span>
                    <span class="info-box-number"></span>
                  </div>
                </div>
              </a>
            </div>
            <!-- END: col -->
            <!-- col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="list_general_knowledge.php">
                <div class="info-box bg-yellow">
                  <span class="info-box-icon bg-yellow"><i class="fa fa-edit"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">General Knowledge</span>
                    <span class="info-box-number"></span>
                  </div>
                </div>
              </a>
            </div>
            <!-- END: col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://arkayapps.com/">Arkay apps</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
