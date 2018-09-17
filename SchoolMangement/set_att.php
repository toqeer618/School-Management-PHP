<?php
	include "connect.php";
	$user=$_GET['id'];

     $qry =$con->query("SELECT class_ID FROM class_teacher WHERE teach_id = '$user'");


  ?>
  <!DOCTYPE html>
<html>
<head>
    <title>Student's Record</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tablestyles.css" rel="stylesheet">
</head>
<body>
</br>
</br>
    <?php
        
            
            if ($qry->num_rows>0) {
                
                while ($row = $qry->fetch_assoc()) 
                {
                	$sect=$row["class_ID"];
                	
                    header("Location:setup_att.php?c_id= $sect&id=$user");
                }
               
            }
            else
                $result = "You are not a class teacher";
            
   
        
    ?>
</body>
</html> 