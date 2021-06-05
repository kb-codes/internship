<?php
//DATABASE CONNECTION :
include "../config.php";
    if(isset($_GET["id"]))
    {
        $token = $_GET['id'];
        $image = "SELECT `category_image` FROM ".TBL_CATEGORY." WHERE `id`='$token'";
        $sel=mysqli_query($con,$image);
        $fetch=mysqli_fetch_array($sel);
        $status=unlink("../images/".$fetch['category_image']);

        if($status)
        {
            $query="DELETE FROM ".TBL_CATEGORY." WHERE `id`='$token'";
            $del=mysqli_query($con,$query);
            if($del)
            {
                header('location:../listcategory.php');   
            }
                          
        }
        else
        {
            echo "something went wrong !";
        }
    }
?>
