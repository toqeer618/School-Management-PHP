<?php 
	include "connect.php";
	$userid=$_GET['id'];
  $qry =$con->query("SELECT * FROM teacher where Teach_id='$userid'");
 ?>
	<html>
<head>
	<title>Welcome To Teacher Main Page </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo $_GET["id"];
 ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="set_marks.php?id=<?php echo $userid?>">Set Marks <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="set_att.php?id=<?php echo $userid?>">Set Attendence</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="current_cources.php?id=<?php echo $userid?>">Current Cources</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link disabled" href="Pass_change.php">Password Change</a>
      </li>
    </ul>

  </div>
</nav>
</br>
<?php
    
            $result = "<div class='form-group row'>";
      $result .= "<div class='col-sm-2'></div>";

      if ($qry->num_rows>0) {
                $class = "trow1";
                $count = 1;
        $result .= "<div class='col-sm-8'>";
                $result .= "<table class='table table-bordered'>";
        $result .= "<th class='tblh'>Teacher Informatio</th>
        <th class='tblh'> </th>";
        
        while ($row = $qry->fetch_assoc()) 
        {
          //one row
          $result .= "<tr class='".$class."'>
                    <td>
                    Name
                  </td>
                  <td>
                    ".$row['teach_name']."
                  </td>
                </tr>
                 
                <tr class='".$class."'>
                <td>
                    Phone No
                  </td>
                  <td>
                    ".$row['phone_no']."
                  </td>
                  
                </tr><tr class='".$class."'>
                <td>
                    Email
                  </td>
                  <td>
                    ".$row['email']."
                  </td>
                  
                </tr>
                <tr class='".$class."'>
                <td>
                    'Gender'
                  </td>
                  <td>

                    ".$row['sex']."
                  </td>
                  
                </tr>
                <tr class='".$class."'>
                <td>
                    'Address'
                  </td>
                  <td>
                    ".$row['address']."
                  </td>
                  
                </tr>"
                ;
                    if(($count%2)==0)
                        $class = "trow1";
                    else 
                        $class = "trow2";
                    
                    $count++;
                    //echo $count;
        }
        $result .= "</table>";
                $result .= "</div>";
      }
      else
        $result = "No record found";
            
            $result .= "<div class='col-sm-2'></div></div>";
      echo $result;
    
  ?>

</body>

</html>


