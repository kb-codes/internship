<?php
    //DATABASE CONNECTION :
    include "../config.php";
    $category = $_POST['category'];
    $question = $_POST['question'];
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op3 = $_POST['op3'];
    $op4 = $_POST['op4'];
    $ans = $_POST['ans'];
    $query = "SELECT * FROM `current_affairs` WHERE `question`='$question'";
    $sel=mysqli_query($con,$query);
    
    if(isset($_POST['token']))
    {
        
        $id = $_POST['token'];
        $q = "SELECT * FROM `current_affairs` WHERE `category_name`='$category_name' AND `category_type`='$category_type' AND `id` !='$token'";
        $select=mysqli_query($con,$q); 
        if(mysqli_num_rows($select)>0) 
        {
            $return['status'] = "This Category is already added !";
            echo json_encode($return);
        }
        else
        {
            $query="UPDATE `current_affairs` SET `category`='$category', `question`='$question',`op1`='$op1',`op2`='$op2',`op3`='$op3',`op4`='$op4',`ans`='$ans' WHERE id = '$id'";
        
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
    else
    {
        if(mysqli_num_rows($sel)>0)
        {
                $return['status'] = "This Question is already added !";
                echo json_encode($return);
        }
        else
        {
            $query="INSERT INTO `current_affairs` VALUES ('','$category','$question','$op1','$op2','$op3','$op4','$ans')";
        
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
    
    

   
        
?>