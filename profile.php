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
                                <li class="breadcrumb-item">
                                    <a href="home.php"> <span class="breadcrumb-item active fa fa-home"> &nbsp;Dashboard</span></a>
                                </li>
                                <li class="breadcrumb-item active">My Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
    
              

            <!-- Main content -->

			<section class="col-lg-7 connectedSortable">
                <div class="card card-info">
                <div class="card-header">    
                        <div class="pull-left">	              
						
							<h4 class="float-left">Profile</h4>
							<!--<a href="#profile" class="float-right" data-toggle="tab">Profile</a>-->
						</div>
                   </div>
                   <form name="myForm" id="submitForm">
                    <div class="row card-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputStatus">Username</label><br>
                                <input type="text" name="" class="form-control " placeholder="Name" value="Elbert Murrio">
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Email</label><br>
                                <input type="Email" name="Email" class="form-control " placeholder="Email" value="Admin@gmail.com" >
                            </div>
            
                                <button type="submit" style="margin-left: 10px" class="btn btn-success float-center" data-toggle="modal-default" title="Collapse">
                                    <i class="fas fa-null">Submit</i>
                                </button>                          
                                <button type="button" style="margin-left: 10px" value="add" class="btn btn-default float-center" title="Collapse">
                                    <i class="fas fa-null">Cancel</i>
                                </button>
                        </div>
                    </div>
                    </form> 
                
                </section>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021
                <a href="https://arkayapps.com/">Arkay apps</a>.</strong> All rights reserved.
        </footer>


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script> -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
	
      $("#submitForm").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'core/addQuestion.php',
            data: $('form').serialize(),
            cache:false,
            processData: false,
            success: function (res) {
                var data = JSON.parse(res);
                
                if(data.status == true) {
                alert("Question added successfully");
                window.location.href = 'Listquestion.php';
                } 
                else if(data.status == false){
                alert("Database connectivity error !");
                }
                else{
                    alert(data.status); 
                }
                
            }
        });
      });
  });
</script>
    
</body>

</html>