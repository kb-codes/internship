<?php

  //DATABASE CONNECTION :
  include "config.php";
  if(!isset($_SESSION['uname']))
  {
    header('location:login.php'); 
  }
  $query="SELECT * FROM `questions`";
      
  $select=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gk | List category

  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
  .bt{
    background-color: lightskyblue;
  }
  </style>

  
</head>


<body class="hold-transition sidebar-mini">
    <?php 
          include("Navbar.php");
    ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
          <div class="col-sm-6">
            <ol class="breadcrumb float-left">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Question List</li>
            </ol>
          </div>  
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="raw">
        <div class="col-200"></div>
          </div>
             <div class="card card-info">
                <div class="card-header">
                  <h2 class="float-left">Question List</h2>
                     <div class="card-tools">
                   </div>
                  
                  <a href="Addquestion.php"> <button type="button"  value="" class="btn btn-light float-right" title="Collapse">
                  <i class="fas fa-plus text-dark">Add Question</i> </button> </a>
                  
        
            </div>

                 
            
            <div class="card-body p-0">
              
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Category</th>
                    <th>Option A</th>
                    <th>Option B</th>
                    <th>Option C</th>
                    <th>Option D</th>
                    <th>Correct ANS</th>
                    <th>Action</th>
                   
                  </tr>
                  

                </thead>
                <tbody>

                <?php
                  if(mysqli_num_rows($select) > 0){
                    while($row = mysqli_fetch_array($select)){
                      
                  echo "<tr>";
                  echo "<td>".$row['id']."</td>";
                  echo "<td>".$row['question']."</td>";
                  echo "<td>".$row['category']."</td>";
                  echo "<td>".$row['op1']."</td>";
                  echo "<td>".$row['op2']."</td>";
                  echo "<td>".$row['op3']."</td>";
                  echo "<td>".$row['op4']."</td>";
                  echo "<td>".$row['ans']."</td>";
                  ?>
                    
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                     
                      <a href="./api/deleteQuestion.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"  data-target="#modal-default" data-toggle="modal">
                      <i class="fas fa-trash"></i></a>

                      <div class="modal fade" id="modal-default">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Delete modal </h4>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<p>Are you sure want to Delete&hellip;</p>
															</div>
															<div class="modal-footer justify-content-between">
																<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
																<a href="./api/deleteQuestion.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-primary"> Delete</button> </a>
															</div>
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
												<!-- /.modal -->


                      </div>
                    </td>
                    <?php
                  }
                }
                else{
                echo "No records matching your query were found.";
                }
                  ?>
                </tbody>
              </table>
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
</body>
</html>
