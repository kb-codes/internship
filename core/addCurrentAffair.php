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
    $query = "SELECT * FROM ".TBL_CA." WHERE `question`='$question'";
    $sel=mysqli_query($con,$query);
    
    if(isset($_POST['token']))
    {
        $token = $_POST['token'];
        $q = "SELECT * FROM ".TBL_CA." WHERE `category`='$category' AND `question`='$question' AND `id` !='$token'";
        $select=mysqli_query($con,$q); 
        if(mysqli_num_rows($select)>0) 
        {
            $return['status'] = "This Question is already added !";
            echo json_encode($return);
        }
        else
        {
            $query="UPDATE ".TBL_CA." SET `category`='$category', `question`='$question',`op1`='$op1',`op2`='$op2',`op3`='$op3',`op4`='$op4',`ans`='$ans' WHERE id = '$token'";
        
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