<?php
    //DATABASE CONNECTION :
    include "../config.php";

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
?>