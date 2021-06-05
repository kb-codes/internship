<?php
    include "config.php";
    if(!isset($_SESSION['uname']))
    {
        header('location:login.php'); 
    }
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query="SELECT * FROM ".TBL_GK." WHERE id='$id'";

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

    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-left">
                                <li class="breadcrumb-item">
                                    <a href="home.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Update General Knowledge</li>
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
                       <h2>Update General Knowledge </h2> 
                   </div>
                   <form name="myForm" id="submitForm" enctype="multipart/form-data">
                    <div class="row card-body">
                    
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select id="inputStatus" name="category" id="category" class="form-control custom-select" required>
                                    <option selected disabled value="">Select Category</option>
                                    <?php 
                                        include "config.php";

                                        $query="SELECT * FROM ".TBL_OTHER_CATEGORY." WHERE `category_type`='General Knowledge'";
                                            
                                        $select=mysqli_query($con,$query);
                                        if(mysqli_num_rows($select) > 0)
                                        {
                                            while($row = mysqli_fetch_array($select))
                                            {
                                                    if($fetch['category'] == $row['id']) 
                                                    {
                                                        echo "<option value='".$row['id']."' selected>".$row['category_name']."</option>";

                                                    }
                                                    else
                                                    {
                                                        echo "<option value='".$row['id']."'>".$row['category_name']."</option>";
                                                    }
                                                
                                                
                                            }
                                        }

                                    ?>
                                    
                                </select>

                            </div>
                            <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" value="<?php if(isset($_GET['id'])){ echo $fetch['title']; }  ?>" name="title" id="title" placeholder="Title" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="4" required><?php if(isset($_GET['id'])){ echo $fetch['description']; }  ?></textarea>
                            </div>
                        </div>
                        <input type='hidden' name='token' id="token" value="<?php echo $fetch['id']; ?>"/>
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_image">Image</label>  <br/>
                                    <input type="file" name="uploadfile" id="uploadfile" />
                                    <br/>
                                    <div id="uploaded_image"></div>
                                    <br/>
                                    <div class="form-group">
                                    <img src="./images/gk/<?php echo $fetch['image']; ?>" height=80 width=80></img>
                                    <br/>
                                </div>
                                </div>
                            </div>
                               
                            
                                <button type="submit" style="margin-left: 700px" class="btn btn-success float-center" data-toggle="modal-default" title="Collapse">
                                    <i class="fas fa-null">Submit</i>
                                 </button>                          
                                 <button onClick="window.location.href = 'list_general_knowledge.php'" type="button" style="margin-left: 10px" value="add" class="btn btn float-center" title="Collapse">
                                    <i class="fas fa-null" >Cancel</i>
                                </button>

                      </div>

                    </form> 
                                    

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
        var formData = new FormData(this);
        $.ajax({
            type: 'post',
            url: 'core/addGK.php',
            data: formData,
            cache:false,
            contentType : false,
            processData: false,
            success: function (res) {
                var data = JSON.parse(res);
                if(data.status == true) {
                alert("Question added successfully");
                window.location.href = 'list_general_knowledge.php';
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