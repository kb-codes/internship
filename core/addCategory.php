<?php
    //DATABASE CONNECTION :
    include "../config.php";
    $category_name = $_POST['project_name'];

       
    $query = "SELECT `category_name` FROM `category` WHERE `category_name`='$category_name'";
    $sel=mysqli_query($con,$query);
    
    
    if(isset($_POST['token']))
    {
        $token = $_POST['token'];
        $q = "SELECT `category_name` FROM `category` WHERE `category_name`='$category_name' AND `id` !='$token'";
        $select=mysqli_query($con,$q); 
        if(mysqli_num_rows($select)>0) 
        {
            $return['status'] = "This Category is already added !";
            echo json_encode($return);
        }
        else
        {
            $fileName = $_FILES['uploadfile']['name'];
            $tempname = $_FILES["uploadfile"]["tmp_name"]; 
            
            $fileExt = explode('.', $fileName);
            $fileActExt = strtolower(end($fileExt));
            $allowImg = array('png','jpeg','jpg');
            $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
            $folder = "../images/".$fileNew;
    
            if (move_uploaded_file($tempname, $folder))  
            {
                $query="UPDATE `category` SET `category_name`='$category_name',`category_image`='$fileNew' WHERE `id`='$token'";
        
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

        }         
    }
    else
    {
        if(mysqli_num_rows($sel)>0)
        {
            $return['status'] = "This Category is already added !";
            echo json_encode($return);
        }
        else
        {
            if (!empty($_FILES['uploadfile']['name'])) {

                $fileName = $_FILES['uploadfile']['name'];
                $tempname = $_FILES["uploadfile"]["tmp_name"]; 
                
                $fileExt = explode('.', $fileName);
                $fileActExt = strtolower(end($fileExt));
                $allowImg = array('png','jpeg','jpg');
                $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
                $folder = "../images/".$fileNew;
        
                if (move_uploaded_file($tempname, $folder))  
                {            
                    $sql = "INSERT INTO `category` VALUES ('','$category_name','$fileNew')";
                
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
        
                    
                }else{
                    $return['status'] = false;
                    echo json_encode($return);
                }              
                    
            } 

        }        

    }    
    
?>