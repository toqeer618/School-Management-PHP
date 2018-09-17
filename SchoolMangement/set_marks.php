<?php
    include "connect.php";
    session_start();

    $user=$_GET['id'];

     $qry =$con->query("SELECT sub_name FROM teach_cources WHERE teach_id = '$user'") ;
    //echo $qry;
   // $res = $con->query($qry);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Student's Record</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tablestyles.css" rel="stylesheet">
</head>
<body>
</br>
</br>
    <?php
        
            $result = "<div class='form-group row'>";
            $result .= "<div class='col-sm-2'></div>";

            if ($qry->num_rows>0) {
                $class = "trow1";
                $count = 1;
                $result .= "<div class='col-sm-8'>";
                $result .= "<form  class='form-group' action='setup_marks.php' method='post'>";
                $result .= "<select name='subj' class='form-control'>";
                while ($row = $qry->fetch_assoc()) 
                {
                    //one row
                    $result .= "<option class='".$class."'>
                                    
                                        ".$row['sub_name']."
                                   
                                    
                                </option>";


                    if(($count%2)==0)
                        $class = "trow1";
                    else 
                        $class = "trow2";
                    
                    $count++;
                    //echo $count;
                }
                $result .= "td colspan='2' align='right'>
                    <input type='submit' value='Register'>
                </td>";
                $result .= "</select>";
                 $result .= "</form>";
                $result .= "</div>";
            }
            else
                $result = "No record found";
            
            $result .= "<div class='col-sm-2'></div></div>";
            echo $result;
        
    ?>
</body>
</html> 