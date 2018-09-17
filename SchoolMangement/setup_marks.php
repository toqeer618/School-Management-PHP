<?php
include "connect.php";
//session_start();
$user = $_POST["subj"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Registeration</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="active">
	<div align="right">
		<span>
			<?php
				//echo $wmsg;
			?>
			<a href="logout.php">Logout</a>
		</span>
	</div>
	<div class="container">
	<form class="form_group" action="setup_marks_try.php?subj=<?php echo $user ?>" method="post">
		<table align="center">
			<th colspan="2">Marks</th>
			<tr>
				<td>
					Roll No
				</td>
				<td>
					<input type="text" name="txtRollNo" id="rollno" required>
				</td>
			</tr>
			<tr>
				<td>
					Subject name
				</td>
				<td name="txtSubj">
					<?php echo $user ?>
				</td>
				<td>
					<span id="nameMsg"></span>
				</td>
			</tr>
			
			
			
			<tr>
				<td>
					Obtained Marks
				</td>
				<td>
					<input type="text" name="txtObt" required>
				</td>
			</tr>
			<tr>
				<td>
					Total Marks
				</td>
				<td>
					<input type="text" name="txttotal">				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="right">
					<input type="submit" value="Register">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php
						if (isset($_GET["Message"])) {
							echo $_GET["Message"];
						}
					?>
				</td>
			</tr>
		</table>
	</form>
	</div>
</body>
<script type="text/javascript">

</script>
</html>