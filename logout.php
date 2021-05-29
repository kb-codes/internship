<?php
    include "config.php";
    unset($_SESSION[$session_name]);
    header('Location: index.php');

?>