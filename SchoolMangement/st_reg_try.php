<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";

	$roll = $_POST["rollNo"];
	$name = $_POST["name"];
	$fname = $_POST["fname"];
	$gender = $_POST["Gender"];
	$cont= $_POST["cont"];
	$address = $_POST["add"];
	$passw = $_POST["pass"];
	$mail = $_POST["email"];
	//echo $roll, "  ",$name, "  ",$fname, "  ",$gender, "  ",$cont, "  ",$address, "  ", $passw,"  ", $mail;
	

	if($qry =$con->query("INSERT INTO student values ('$roll','$passw', '$mail','$name', '$fname', '$gender','$cont','$address')"))
	{ $msg="Student registerd";

		 header("Location:adm_main.php?Message=$msg");
	}
	else
		{
			$msg = "Error!";
			header("Location:adm_main.php?Message=$msg");
		}

	//header("Location:register.php?Message=$msg")
?>