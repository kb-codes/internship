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
<body class="hold-transition login-page" style="background: -webkit-gradient(linear, left top, left bottom, from(#1791ff), to(#001f3b)) fixed;">
<div class="login-box">
  <div class="login-logo">
  <img src="images/logo.png" style="width:100px;" alt="Logo"><br>
  <b style="color:white;">GK in Gujarati </b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post" name="form-login">
        <div class="input-group mb-3">
          <input name="username" type="text" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" id="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-2">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
    </div>
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
        url: 'auth.php',
        data: $('form').serialize(),
        success: function (res) {
           
            var data = JSON.parse(res);
            
            if(data.status == true) {
              
              window.location.href = 'home.php';
            } else {
              alert("Invalid Username or Password");
            }
        }
      });

    });

  });
               
</script>
</body>
</html>



