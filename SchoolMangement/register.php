<?php
	include "connect.php";
	session_start();

	if(!isset($_SESSION['user']))
		header("Location:login.php");
	elseif($_SESSION['type'] != "academic")
		header("Location:st_main.php");
	else
		$wmsg = "Welcome ".$_SESSION["user"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registeration</title>
</head>
<body>
	<div align="right">
		<span>
			<?php
				echo $wmsg;
			?>
			<a href="logout.php">Logout</a>
		</span>
	</div>
	<form action="register_try.php" method="post">
		<table align="center">
			<th colspan="2">Student's Registeration</th>
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
					Name
				</td>
				<td>
					<input type="text" name="txtName" id="txtName" onblur="validName()" required>
				</td>
				<td>
					<span id="nameMsg"></span>
				</td>
			</tr>
			<tr>
				<td>
					Father's Name
				</td>
				<td>
					<input type="text" name="txtFName" required>
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<select name="sGender" required>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Contact No.
				</td>
				<td>
					<input type="text" name="txtContact" required>
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="text" name="txtEmail" id="txtEmail" onfocus="genEmail()">				</td>
			</tr>
			<tr>
				<td>
					Address
				</td>
				<td>
					<textarea name="txtAddress" required></textarea>
				</td>
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
</body>
<script type="text/javascript">
	function genEmail()
	{
		var boxEmail = document.getElementById("txtEmail");
		var boxRoll = document.getElementById("rollno");
		var rollno = boxRoll.value;
		var splitRoll = rollno.split("-");
		var email = splitRoll[0]+splitRoll[1]+"@nu.edu.pk";
		boxEmail.value = email;
	}
	function validName()
	{
		var boxName = document.getElementById("txtName");
		var spanName = document.getElementById("nameMsg");
		if(Number(boxName.value))
		{
			spanName.innerHTML = "Invalid Name.....!";
			boxName.focus();
			boxName.value = "";
		}
		else
		spanName.innerHTML = "";
	}
</script>
</html>