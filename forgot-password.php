<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GK in Gujarati | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">

</head>
<body class="hold-transition login-page" style="background: -webkit-gradient(linear, left top, left bottom, from(#1791ff), to(#001f3b)) fixed; ">
<div class="login-box">
    <div class="login-logo">  
      <img src="./images/logo.png" style="width:100px;" alt="Logo"><br>
      <b style="color:white;">Forgot Password?</b>
    </div>
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You can reset your password here.</p>

      <form method="post" id="form">
        
      <div class="input-group mb-3">
           <input name="Email" type="Email" class="form-control" placeholder="Email">
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
      </div>  
          <!-- /.col -->
      <div>
        <a href="login.php">Back to login </a>
        <a href="#" class="btn btn-primary float-right">Submit</a>
      </div>
              
             
        </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->



<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<link href="./plugins/toastr/toastr.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(function () {

    $('form').on('submit', function (e) {
      
      e.preventDefault();
     
      $.ajax({
        type: 'post',
        url: 'changePass.php',
        data: $('form').serialize(),
        success: function (res) {
          
            var data = JSON.parse(res);
            
            if(data.status == true) {
              alert("Password Changed Successfully");
              window.location.href = 'index.php';
            }
            else if(data.status == "notmatch")
            {
              alert("Password Not Match !");
            }
             else {
              alert("Something went wrong !");
            }
        }
      });

    });

  });
               
</script>


</body>
</html>



