<?php
  include "config.php";
  if(isset($_SESSION[$session_name]))
  {
    header('Location: home.php');
  }
  else
  {
    header('location:login.php'); 
  }

?>