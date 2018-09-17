<?php
	include "connect.php";
	if (isset($_POST["SType"])) 
	{
		$SType = $_POST["SType"];
		$SValue = $_POST["SValue"];

		$qry = "";
		//echo $SType;
		if ($SType == "rollno") 
			$qry = "SELECT * FROM student WHERE roll_no = '".$SValue."'";
		else
			$qry = "SELECT * FROM student WHERE st_name LIKE '%".$SValue."%'";
		
		//echo $qry;

		$res = $con->query($qry);
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
	<form action="" method="post">
        <div class="page-header" align='center'>
            <h2>Student's Information</h2>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <label for="SearchType" class="form-label col-sm-1">Search Type</label>  
            <div class="col-sm-3">
                <select name="SType" class="form-control">
		          <option value="rollno">Roll No</option>
		          <option value="name">Name</option>
		      </select>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-5"></div>
            <div class="col-sm-3">
                <input type="text" name="SValue" class="form-control" required placeholder="Roll No/Name">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" align='right'>
                <input type="submit" value="Search" class="btn btn-primary">
            </div>
            <div class="col-sm-4"></div>
        </div>
	</form>
	<?php
		if (isset($_POST["SType"])) {
            $result = "<div class='form-group row'>";
			$result .= "<div class='col-sm-2'></div>";

			if ($res->num_rows>0) {
                $class = "trow1";
                $count = 1;
				$result .= "<div class='col-sm-8'>";
                $result .= "<table class='table table-bordered'>";
				$result .= "<th class='tblh'>Roll No</th><th class='tblh'>Name</th><th class='tblh'>Father's Name</th><th class='tblh'>Gender</th><th class='tblh'>Contact No</th><th class='tblh'>Address</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr class='".$class."'>
									<td>
										".$row['roll_no']."
									</td>
									<td>
										".$row['st_name']."
									</td>
									<td>
										".$row['f_name']."
									</td>
									<td>
										".$row['gender']."
									</td>
									<td>
										".$row['contact']."
									</td>
									<td>
										".$row['address']."
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