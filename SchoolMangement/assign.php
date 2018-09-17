<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
    session_start();
	$sub = $_SESSION["subj"];
	$tid = $_SESSION["tid"];
	echo $tid;
	echo $sub;

	if($qry =$con->query("INSERT INTO teach_cources values ('$tid','$sub', '1A')"))
	{ $msg="Student registerd";

		 header("Location:adm_main.php?Message=$msg");
	}
	else
		{
			$msg = "Error!";
			//header("Location:adm_main.php?Message=$msg");
		}
session_destroy();
	//header("Location:register.php?Message=$msg")
?>