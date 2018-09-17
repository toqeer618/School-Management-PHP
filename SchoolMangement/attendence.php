<?php
include "connect.php";

if(isset($_GET["id"]))
{
     $user=$_GET["id"];
}

$qry =$con->query("SELECT * FROM attendence WHERE roll_no = '$user'") ;

  ?>

  <!DOCTYPE html>
<html>
<head>
	<title>Student's Record</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tablestyles.css" rel="stylesheet">
    <div text-align="center"> <p><bold> <?php echo $user  ?> </bold> </p></div>
</head>
<body>

	<?php
		
            $result = "<div class='form-group row'>";
			$result .= "<div class='col-sm-2'></div>";

			if ($qry->num_rows>0) {
                $class = "trow1";
                $count = 1;
				$result .= "<div class='col-sm-8'>";
                $result .= "<table class='table table-bordered'>";
				$result .= "<th class='tblh'>Date</th><th class='tblh'>Staus </th>";
				while ($row = $qry->fetch_assoc()) 
				{
					//one row
					$result .= "<tr class='".$class."'>
									<td>
										".$row['date']."
									</td>
									<td>
										".$row['status']."
									</td>
								</tr>";
                    if(($count%2)==0)
                        $class = "trow1";
                    else 
                        $class = "trow2";
                    
                    $count++;
                    //echo $count;
				}
				$result .= "</table>";
                $result .= "</div>";
			}
			else
				$result = "No record found";
            
            $result .= "<div class='col-sm-2'></div></div>";
			echo $result;
		
	?>
</body>
</html> 