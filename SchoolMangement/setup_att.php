<?php
	
	include "connect.php";
	$cla_id=$_GET['c_id'];
	$tuser=$_GET['id'];
     $qry =$con->query("SELECT roll_no FROM enrollment ");
   

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
				 $result .= "<form  class='form-group' action='teac_login.php' method='post'>";
                $result .= "<table class='table table-bordered'>";
				$result .= "<th class='tblh'>Roll No</th>";
				while ($row = $qry->fetch_assoc()) 
				{
					//one row
					$result .= "<tr class='".$class."'>
									<td>
										".$row['roll_no']."
										<input type='text' name='insert'>
									</td>

								</tr>";
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
                 $result .= "</form>";
				$result .= "</table>";
                $result .= "</div>";
			}
			
            
            $result .= "<div class='col-sm-2'></div></div>";
			echo $result;
		
	?>
</body>
</html> 