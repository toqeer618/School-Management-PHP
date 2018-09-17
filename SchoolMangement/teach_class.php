<?php
include "connect.php";

$qry1 =$con->query("SELECT * FROM teacher");
$qry=$con->query("SELECT * FROM class_sections") ;


session_start();

if(isset($_POST['class']))
{
   $res = $_POST['class'];
   $_SESSION['class'] = $res;
}

if(isset($_POST['teach_id']))
{
   $res1 = $_POST['teach_id'];
   $_SESSION['teach_id'] = $res1;
}

if(isset($_SESSION['class']) && isset($_SESSION['teach_id']))
{
   header('Location: assign_class_teach.php');
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
                $result .= "<form  class='form-group' action='teach_class.php' method='post'>";
                $result .= "<select name='class' class='form-control'>";
                //$result.= "<select name='teach' class='form-control'>";
                while ($row = $qry->fetch_assoc()) 
                {
                    //one row
                    $result .= "<option class='".$class."'>
                                    
                                        ".$row['class']."
                                   
                                    
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
                $result .= "<form  class='form-group' action='teach_class.php' method='post' name='res1'>";
                $result .= "<select name='teach_id' class='form-control'>";
                //$result.= "<select name='teach' class='form-control'>";
                while ($row = $qry1->fetch_assoc()) 
                {
                    //one row
                    $result .= "<option class='".$class."'>
                                    
                                        ".$row['Teach_ID']."
                                   
                                    
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