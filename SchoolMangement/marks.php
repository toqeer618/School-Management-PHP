<?php
	include "connect.php";
	//echo $_GET["id"];
	$SValue =$_GET["id"];;

		$qry = "";
		//echo $SType;
		 
			$qry = "SELECT * FROM marks WHERE roll_no = '".$SValue."'";
		
		

		$res = $con->query($qry);
		//echo $res;
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student's Record</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tablestyles.css" rel="stylesheet">
</head>
<body>

	<?php
		if (isset($SValue)) {
            $result = "<div class='form-group row'>";
			

			if ($res->num_rows>0) {
                $class = "trow1";
                $count = 1;
				$result .= "<div class='col-sm-8'>";
                $result .= "<table class='table table-bordered'>";
				$result .= "<th class='tblh'>Roll No</th><th class='tblh'>Subject ID</th><th class='tblh'>Obtainde Marks</th><th class='tblh'>Total Marks</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr class='".$class."'>
									<td>
										".$row['roll_no']."
									</td>
									<td>
										".$row['Sub_name']."
									</td>
									<td>
										".$row['obt_marks']."
									</td>
									<td>
										".$row['total_marks']."
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
		}
	?>
</body>
</html> 