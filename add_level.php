<?php
  include "config.php";
  if(!isset($_SESSION['uname']))
  {
	header('location:login.php'); 
  }
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $query="SELECT * FROM `category` WHERE id='$id'";

	$sel=mysqli_query($con,$query);
    $fetch = mysqli_fetch_array($sel);
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
			  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
			  
			  <li class="breadcrumb-item active">Add Level</li>
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
			  
			  
				  <h2 class="float-left">Add level</h2>
				  
				  <div class="card-tools">
					  
				  </div>
				  
				  
			</div>
			<form method="post" name="myForm" id="submitForm" enctype="multipart/form-data">
			<div class="card-body">
			  <div class="form-group">
				<label for="inputName">Level Name</label>
				<input type="text" value="<?php if(isset($_GET['id'])){ echo $fetch['category_name']; } ?>" name="project_name" id="project_name" class="form-control" required>
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
				 
				<button onClick="window.location.href = 'listcategory.php'" type="button" style="margin-left: 10px" value="add" class="btn btn float-left" title="Collapse">
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

<script type="text/javascript">
  $(document).ready(function(){
	
      $("#submitForm").on("submit", function(e){
		
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          url  : "core/addCategory.php",
          type : "POST",
          cache:false,
          data :formData,
          contentType : false, // you can also use multipart/form-data replace of false
          processData: false,
          success:function(res){
						var data = JSON.parse(res);

						if(data.status == true) {
							alert("Category added successfully !");
							window.location.href = 'listcategory.php';
						}
						else if(data.status==false){
							alert("Errror !");
						}
						else
						{
							alert(data.status);
						}

					}
        });
      });
  });
</script>
</body>
</html>
