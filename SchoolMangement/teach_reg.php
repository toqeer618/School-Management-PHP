<?php
	
include "connect.php";


  ?>


<!DOCTYPE html>
<html>
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
</head>
<body background="backg.jpg">
		<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form  action="teach_reg_try.php" method="post">
					<div class="col-sm-12">
						<div class="row">
						<div class="col-sm-6 form-group">
								<label> Teacher ID</label>
								<input type="text" name="tid" placeholder="Enter Roll No Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Default Teacher Password</label>
								<input type="Password" name="tpass" placeholder="Enter Default Password Here.." class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 form-group">
								<label>Teacher Name</label>
								<input type="text" name="tname" placeholder="Enter First Name Here.." class="form-control" onblur="validName()" >
							</div>
							<span id="nameMsg"></span>
							
						</div>					
						
						<div class="row">
									
				
					 <label>Gender</label>
				
					<select class="form-group" name="tGender" required>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
			
							
						</div>

									
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="tcont" placeholder="Enter Phone Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Email </label>
						<input type="text"  name="email" placeholder="Enter Email Address Here.." class="form-control">
					</div>	
					<div class="form-group">
						<label>Salary</label>
						<input type="text" name="tsal" placeholder="Enter salary here Teacher salary" class="form-control">
					</div>
					<div class="form-group">
				<label>Address</label>
							<textarea name="tadd" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	

					<input type="submit" value="Register">				
					</div>
				</form> 
				</div>
	</div>
	</div>

</body>

<script type="text/javascript">
	function genEmail()
	{
		var boxEmail = document.getElementById("email");
		var boxRoll = document.getElementById("rollNo");
		var rollno = boxRoll.value;
		var splitRoll = rollno.split("-");
		var email = splitRoll[0]+splitRoll[1]+"@nu.edu.pk";
		boxEmail.value = email;
	}
	function validName()
	{
		var boxName = document.getElementById("name");
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

