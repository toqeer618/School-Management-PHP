<?php 
include "connect.php";

$SValue =$_GET["id"];
//$Ssec =$_GET["sec"];

		$qry = "";
		//echo $SType;
		 
			$qry =$con->query("SELECT * FROM  marks WHERE roll_no = '$SValue' and total_marks='100'") ;
			//echo $qry;
		


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
			$result .= "<div class='col-sm-2'></div>";

			if ($qry->num_rows>0) {
                $class = "trow1";
                $count = 1;
				$result .= "<div class='col-sm-8'>";
                $result .= "<table class='table table-bordered'>";
				$result .= "<th class='tblh'>Subject Name</th><th class='tblh'>Class</th>";
				while ($row = $qry->fetch_assoc()) 
				{
						$result .= "<tr class='".$class."'>
									<td>
										".$row['Sub_name']."
									</td>
									<td>
										".$row['obt_marks']."
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