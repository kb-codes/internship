<?php
    //DATABASE CONNECTION :
    include "config.php";

    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

        $query="UPDATE `$table` SET `password`='$pass1' WHERE 1";

        if($pass1 == $pass2)
        {
            $select=mysqli_query($con,$query);
     
            if ($select) 
            {
                $return['status'] = true;
                echo json_encode($return);
            }
            else
            {
                $return['status'] = false;
                echo json_encode($return); 
            }

        }
        else
        {
            $return['status'] = "notmatch";
            echo json_encode($return);
        }
       
?>