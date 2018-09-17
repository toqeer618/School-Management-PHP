<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";

	$tid = $_POST["tid"];
	$tname = $_POST["tname"];
	$tsal = $_POST["tsal"];
	$tgender = $_POST["tGender"];
	$tcontact= $_POST["tcont"];
	$taddress = $_POST["tadd"];
	$tpassw = $_POST["tpass"];
	$mail = $_POST["email"];
	

	if($qry =$con->query("INSERT INTO teacher values ('$tid','$tname', '$tpassw','$tcontact', '$mail', '$taddress','$tgender','$tsal')"))
		$msg = "Good!";
	else
		$msg = "Error!";

	
?>