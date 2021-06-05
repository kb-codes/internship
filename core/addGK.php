<?php
    //DATABASE CONNECTION :
    include "../config.php";
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
       
    $query = "SELECT * FROM ".TBL_GK." WHERE `category`='$category' AND `description`='$description'";
    $sel=mysqli_query($con,$query);

    if(isset($_POST['token']))
    {
        $token = $_POST['token'];
        $q = "SELECT * FROM ".TBL_GK." WHERE `title`='$title' AND `id` !='$token'";
        $select=mysqli_query($con,$q); 
        if(mysqli_num_rows($select)>0) 
        {
            $return['status'] = "This Title is already added !";
            echo json_encode($return);
        }
        else
        {
            $fileName = $_FILES['uploadfile']['name'];
            $tempname = $_FILES["uploadfile"]["tmp_name"]; 

            if(!empty($fileName))
            {
                $image = "SELECT `image` FROM ".TBL_GK." WHERE `id`='$token'";
                $sel=mysqli_query($con,$image);
                $fetch=mysqli_fetch_array($sel);
                $status=unlink("../images/gk/".$fetch['image']);
                if($status)
                {
                    $fileExt = explode('.', $fileName);
                    $fileActExt = strtolower(end($fileExt));
                    $allowImg = array('png','jpeg','jpg');
                    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
                    $folder = "../images/gk/".$fileNew;
            
                    if (move_uploaded_file($tempname, $folder))  
                    {
                        $query="UPDATE ".TBL_GK." SET `category`='$category',`title`='$title', `description`='$description',`image`='$fileNew' WHERE `id`='$token'";
                
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
                $query="UPDATE ".TBL_GK." SET `category`='$category',`title`='$title', `description`='$description' WHERE `id`='$token'";
                
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
            $return['status'] = "This Description is already added !";
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
                $folder = "../images/gk/".$fileNew;
        
                if (move_uploaded_file($tempname, $folder))  
                {            
                    $sql = "INSERT INTO ".TBL_GK." VALUES ('','$category','$title','$description','$fileNew')";
                
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