<?php
    //DATABASE CONNECTION :
    include "config.php";

    $name = $_POST['username'];
    $pass = md5($_POST['password']);


        $query="SELECT * FROM ". TBL_ADMIN ." WHERE `username`='$name' and `password`='$pass'";
        
        $select=mysqli_query($con,$query);

            if(mysqli_num_rows($select) > 0)
            {
                $_SESSION[$session_name] = $name;
                $return['status'] = true;
                echo json_encode($return); 
            }
            else
            {
                $return['status'] = false;
                echo json_encode($return); 
            }
?>