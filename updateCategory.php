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
  <title>GK | List category

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
              <li class="breadcrumb-item active">Edit Category</li>
            </ol>
          </div>  
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="raw">
        <div class="col-200">
         
      </div>
      
           <div class="card card-info">
          
            <div class="card-header">
              
              
                  <h2 class="float-left">Edit Category</h2>
                  
                  <div class="card-tools">
                      
                  </div>
                  
                  
            </div>
            <form method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Category Name</label>
                <input type="text" value="<?php if(isset($_GET['category'])){ echo $_GET['category']; } ?>" name="project_name" id="project_name" class="form-control">
              </div>
              <?php 
              if(isset($_GET['id']))
              {
                  echo "<input type='hidden' name='token' value='".$_GET['id']."'/>";
              }
              ?>
                <button type="submit"  value="add" class="btn btn-success float-left" data-toggle="modal" title="Collapse">
                  <i class="fas fa-null">Submit</i>
                </button>
            </form>
                       <div class="modal fade" id="modal-default">
                            <div class ="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Data Added successfully</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  </div>
                                <div class="modal-footer justify-content-right">
                                  
                                  <button type="button" class="btn btn-primary" data-dismiss="modal"> OK</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>                     
                 
                <button type="button" style="margin-left: 10px" value="add" class="btn btn float-left" title="Collapse">
                <i class="fas fa-null" >Cancel</i>
                </button>
            </div>
            
      </div>

    </section>
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

<script>

$(function () {

$('form').on('submit', function (e) {
  
  e.preventDefault();

  $.ajax({
    type: 'post',
    url: './api/addCategory.php',
    data: $('form').serialize(),
    success: function (res) {
        var data = JSON.parse(res);
        
        if(data.status == true) {
          $('#modal-default').modal({'show' : true});
          window.location.href = 'listcategory.php';
        } else {
          alert("Somethig went wrong !");
        }
    }
  });

});

});

</script>

</body>
</html>