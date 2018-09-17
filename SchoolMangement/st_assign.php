<?php
include "connect.php";
session_start();
$qry =$con->query("SELECT * FROM subjects") ;
$qry1=$con->query("SELECT * FROM student") ;
//$sub = $_POST['subj'];



if(isset($_POST['subj']))
{
   $res = $_POST['subj'];
   $_SESSION['subj'] = $res;
}

if(isset($_POST['sid']))
{
   $res1 = $_POST['sid'];
   $_SESSION['sid'] = $res1;
}

if(isset($_SESSION['subj']) && isset($_SESSION['sid']))
{
   header('Location:st_assign_try.php');
}
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
                $result .= "<form  class='form-group' action='st_assign.php' method='post'>";
                $result .= "<select name='subj' class='form-control'>";
                //$result.= "<select name='teach' class='form-control'>";
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
                $result .= "<td colspan='2' align='right'>
                    <input type='submit' value='Register'>
                </td>";
                $result .= "</select>";
                // $result .= "</select>";
                 $result .= "</form>";
                $result .= "</div>";


            }
            else
                $result = "No record found";
            
            $result .= "<div class='col-sm-2'></div></div>";
            echo $result;

            
    ?>

    <?php
        
            $result = "<div class='form-group row'>";
            $result .= "<div class='col-sm-2'></div>";

            if ($qry1->num_rows>0) {
                $class = "trow1";
                $count = 1;
                $result .= "<div class='col-sm-8'>";
                $result .= "<form  class='form-group' action='st_assign.php' method='post' name='res1'>";
                $result .= "<select name='sid' class='form-control'>";
                //$result.= "<select name='teach' class='form-control'>";
                while ($row = $qry1->fetch_assoc()) 
                {
                    //one row
                    $result .= "<option class='".$class."'>
                                    
                                        ".$row['roll_no']."
                                   
                                    
                                </option>";

                     



                    if(($count%2)==0)
                        $class = "trow1";
                    else 
                        $class = "trow2";
                    
                    $count++;
                    //echo $count;
                }
                $result .= "<td colspan='2' align='right'>
                    <input type='submit' value='Register'>
                </td>";
                $result .= "</select>";
                // $result .= "</select>";
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