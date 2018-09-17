<?php
	include "connect.php";
session_start();
if(isset($_GET["id"]))
{
     $user=$_GET["id"];
}
              
    
	
?>

<html>
<head>
	<title>Welcome </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo $user ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="st_reg.php">Register Student <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="teach_reg.php">Register Teacher</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="ass_subj.php">Assign Subject</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="teach_class.php">Assign Class Teacher</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="st_assign.php">Student Cources </a>
      </li>
      <?php 
                        if(isset($_GET["Message"]))
                        {
                            echo "<script>";
                            echo $_GET["Message"];
                            echo "</scrip>";
                        }
         ?>
    </ul>
  </div>
</nav>
</body>
<?php 



 ?>
</html>