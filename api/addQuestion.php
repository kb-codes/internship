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
    
    if(isset($_POST['token']))
    {
        $id = $_POST['token'];
        $query="UPDATE `questions` SET `question`='$question',`category`='$category',`op1`='$op1',`op2`='$op2',`op3`='$op3',`op4`='$op4',`ans`='$ans' WHERE id = '$id'";
        
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
    else
    {
        $query="INSERT INTO `questions` VALUES ('','$question','$category','$op1','$op2','$op3','$op4','$ans')";
        
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

   
        
?>