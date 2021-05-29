<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="form-login">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
                    alert('user authenticated');
                    window.location.href = 'home.php';
                } else {
                    alert('Invalid');
                }
            }
          });

        });

      });
    </script>
</html>