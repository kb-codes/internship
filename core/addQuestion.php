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
    $query = "SELECT `question` FROM ".TBL_QUESTIONS." WHERE `question`='$question'";
    $sel=mysqli_query($con,$query);
    
    if(isset($_POST['token']))
    {
        $id = $_POST['token'];
        $query="UPDATE ".TBL_QUESTIONS." SET `question`='$question',`category`='$category',`op1`='$op1',`op2`='$op2',`op3`='$op3',`op4`='$op4',`ans`='$ans' WHERE id = '$id'";
        
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
        if(mysqli_num_rows($sel)>0)
        {
                $return['status'] = "This Question is already added !";
                echo json_encode($return);
        }
        else
        {
            $query = "SELECT * FROM ".TBL_QUESTIONS." WHERE `question`='$question'";
            $sel=mysqli_query($con,$query);
            if(mysqli_num_rows($sel)>0)
            {
                $return['status'] = "This Question is already added !";
                echo json_encode($return);
            }
            else
            {
                $query="INSERT INTO ".TBL_QUESTIONS." VALUES ('','$question','$category','$op1','$op2','$op3','$op4','$ans')";
            
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
    
    

   
        
?>