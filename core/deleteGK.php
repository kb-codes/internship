<?php
//DATABASE CONNECTION :
include "../config.php";
    if(isset($_GET["id"]))
    {
        $token = $_GET['id'];
        $image = "SELECT `image` FROM ".TBL_GK." WHERE `id`='$token'";
        $sel=mysqli_query($con,$image);
        $fetch=mysqli_fetch_array($sel);
        $status=unlink("../images/gk/".$fetch['image']);
        

        if($status)
        {
            $query="DELETE FROM ".TBL_GK." WHERE `id`='$token'";
            $del=mysqli_query($con,$query);
            if($del)
            {
                header('location:../list_general_knowledge.php');
            }
            
        }
        else
        {
            echo "something went wrong !";
        }
    }
?>
