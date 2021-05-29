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
    <title>AdminLTE 3 | List category

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

    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-left">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Add Question</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>


            <!-- Main content -->
            <section class="content">
                <div class="card card-info">
                   <div class="card-header">    
                       <h2>Add Question </h2> 
                   </div>
                   <form>
                    <div class="row card-body">
                    
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select id="inputStatus" name="category" class="form-control custom-select">
                                    <option selected disabled>Select Category</option>
                                    <?php 
                                        include "config.php";

                                        $query="SELECT * FROM `category`";
                                            
                                        $select=mysqli_query($con,$query);
                                        if(mysqli_num_rows($select) > 0)
                                        {
                                            while($row = mysqli_fetch_array($select))
                                            {
                                                echo "<option value='".$row['id']."'>".$row['category_name']."</option>";
                                            }
                                        }

                                    ?>
                                    
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Question</label>
                                <textarea name="question" id="inputDescription" class="form-control" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Option A</label>
                                <input type="text" name="op1" id="inputName" placeholder="option A" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Option B</label>
                                <input type="text" name="op2" id="inputName" placeholder="option B" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Option C</label>
                                <input type="text" name="op3" id="inputName" placeholder="option C" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Option D</label>
                                <input type="text" name="op4" id="inputName" placeholder="option D" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">Answer</label>
                                <select id="inputStatus" name="ans" class="form-control custom-select">
                                    <option selected disabled>Select answer</option>
                                    <option>Option A</option>
                                    <option>Option B</option>
                                    <option>Option C</option>
                                    <option>Option D</option>
                                </select>
                            </div>

                            
                                

                                <button type="submit" style="margin-left: -120px" class="btn btn-success float-center" data-toggle="modal" title="Collapse">
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
                                            
                        
                                <button type="button" style="margin-left: 10px" value="add" class="btn btn float-center" title="Collapse">
                                    <i class="fas fa-null" >Cancel</i>
                                </button>
                            
                            </div>


                        </div>
                        

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
            <strong>Copyright &copy; 2014-2021
                <a href="https://arkayapps.com/">Arkay apps</a>.</strong> All rights reserved.
        </footer>


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
                url: './api/addQuestion.php',
                data: $('form').serialize(),
                success: function (res) {
                    var data = JSON.parse(res);
                    
                    if(data.status == true) {
                   // $('#modal-default').modal({'show' : true});
                    alert("Question added successfully");
                    window.location.href = 'Addquestion.php';
                    } else {
                    alert("Something went wrong !");
                    }
                }
            });

            });

        });

</script>
</body>

</html>