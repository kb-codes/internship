<?php
//DATABASE CONNECTION :
include "../config.php";
    if(isset($_GET["id"]))
    {
        $id = $_GET['id'];
        $query="DELETE FROM ".TBL_CATEGORY." WHERE `id`='$id'";
        
        $select=mysqli_query($con,$query);

        if($select)
        {
            header('location:../listcategory.php');                 
        }
        else
        {
            echo "something went wrong !";
        }
    }
?>
