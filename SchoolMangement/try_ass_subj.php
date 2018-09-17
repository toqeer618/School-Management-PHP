<?php
include "connect.php";
$sub = $_POST["subj"];

//$qry =$con->query("SELECT * FROM subjects") ;
$qry=$con->query("SELECT * FROM teacher") ;
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
                $result .= "<form  class='form-group' action='assign.php?s=<?php echo $sub?>' method='get'>";
                $result .= "<select name='tid' class='form-control'>";
                //$result.= "<select name='teach' class='form-control'>";
                while ($row = $qry->fetch_assoc()) 
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