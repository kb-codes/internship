<?php
//DATABASE CONNECTION :
include "../config.php";
    if(isset($_GET["id"]))
    {
        $id = $_GET['id'];
        $query="DELETE FROM `general_knowledge` WHERE `id`='$id'";
        
        $select=mysqli_query($con,$query);

        if($select)
        {
            header('location:../list_general_knowledge.php');                 
        }
        else
        {
            echo "something went wrong !";
        }
    }
?>
