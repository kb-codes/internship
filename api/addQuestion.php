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
?>