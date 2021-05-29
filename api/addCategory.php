<?php
    //DATABASE CONNECTION :
    include "../config.php";


    if(isset($_POST['token']))
    {
        $new = $_POST['project_name'];
        $token = $_POST['token'];
        $query="UPDATE `category` SET `category_name`='$new' WHERE `id`='$token'";
        
        $select=mysqli_query($con,$query);

            if($select)
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
        $name = $_POST['project_name'];
        $query="INSERT INTO `$categoryTable` VALUES ('','$name')";
        
        $select=mysqli_query($con,$query);

            if($select)
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
    }
    
?>