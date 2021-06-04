<?php
    //DATABASE CONNECTION :
    include "../config.php";
    $category_name = $_POST['project_name'];
    $category_type = $_POST['category_type'];

    if(isset($_POST['token']))
    {
        $token = $_POST['token'];
        $q = "SELECT * FROM ".TBL_OTHER_CATEGORY." WHERE `category_name`='$category_name' AND `category_type`='$category_type' AND `id` !='$token'";
        $select=mysqli_query($con,$q); 
        if(mysqli_num_rows($select)>0) 
        {
            $return['status'] = "This Category is already added !";
            echo json_encode($return);
        }
        else
        {           
            $query="UPDATE ".TBL_OTHER_CATEGORY." SET `category_type`='$category_type',`category_name`='$category_name' WHERE `id`='$token'";
    
            $update=mysqli_query($con,$query);

            if($update)
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
    }
    else
    {
        $query = "SELECT * FROM ".TBL_OTHER_CATEGORY." WHERE `category_name`='$category_name' AND `category_type`='$category_type'";
        $sel=mysqli_query($con,$query);
    
        if(mysqli_num_rows($sel)>0)
        {
            $return['status'] = "This Category is already added !";
            echo json_encode($return);
        }
        else
        {           
            $sql = "INSERT INTO ".TBL_OTHER_CATEGORY." VALUES ('','$category_type','$category_name')";
        
            $sel=mysqli_query($con, $sql);
            if($sel)
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

    }
       
                        
    
    
?>