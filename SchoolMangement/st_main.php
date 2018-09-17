<?php
	include "connect.php";
		session_start();

    if(!isset($_SESSION['roll_no']))
		header("Location:login.php");
	else
		$wmsg = $_SESSION["roll_no"];
     //echo $_GET["n"];

        //else
                   // header("Location:st_main.php")
	
?>

<html>
<head>
	<title>Welcome </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo $wmsg ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="marks.php?id=<?php echo $wmsg?>">Marks <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Attendence.php?id=<?php echo $wmsg?>">Attendence</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="enrolled.php?id=<?php echo $wmsg?>">Cources</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="Result.php?id=<?php echo $wmsg?>">Result_card</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="Pass_change.php">Password Change</a>
      </li>
    </ul>
  </div>
</nav>
</body>
<?php 



 ?>
</html>