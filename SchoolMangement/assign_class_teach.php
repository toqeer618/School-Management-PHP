<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
    session_start();
	$sub = $_SESSION["class"];
	$tid = $_SESSION["teach_id"];
	echo $tid;
	echo $sub;
	session_destroy();

	/*if($qry =$con->query("INSERT INTO teach_cources values ('$tid','$sub', '1A')"))
	{ $msg="Student registerd";

		 header("Location:adm_main.php?Message=$msg");
	}
	else
		{
			$msg = "Error!";
			//header("Location:adm_main.php?Message=$msg");
		}
*/
	//header("Location:register.php?Message=$msg")
?>