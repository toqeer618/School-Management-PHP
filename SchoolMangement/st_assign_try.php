<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
    session_start();
	$sub = $_SESSION["subj"];
	$sid = $_SESSION["sid"];
	echo $sid;
	echo $sub;

	if($qry =$con->query("INSERT INTO marks values ('$sid','$sub', '0','0')"))
	{ $msg="Student registerd";

		 //header("Location:adm_main.php?Message=$msg");
	}
	else
		{
			$msg = "Error!";
			//header("Location:adm_main.php?Message=$msg");
		}
session_destroy();
	//header("Location:register.php?Message=$msg")
?>