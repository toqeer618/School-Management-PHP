<?php 
include "connect.php";
$roll = $_POST["txtRollNo"];
	$name = $_GET["subj"];
	
	$obt = $_POST["txtObt"];
	$tot = $_POST["txttotal"];

	if($qry =$con->query("UPDATE marks SET obt_marks='$obt' , total_marks='$tot' WHERE roll_no = '$roll' AND Sub_name='$name' "))
		echo "True";
	else
		echo 'flase'; 
	
	
	
 ?>