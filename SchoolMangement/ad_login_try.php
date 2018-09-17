<?php
    include "connect.php";
    

    $user = $_POST["txtUid"];
    $pass = $_POST["txtPass"];
  

     $qry =$con->query("SELECT * FROM admin WHERE admin_id = '$user'");

    if($qry->num_rows>0)
    {
        //user found
        if($row = $qry->fetch_assoc())
        {
            if($pass == $row["ad_pass"])
            {
                //echo $row["admin_id"];               
             header("Location:adm_main.php?id=$user");
            }
            else
            {
                $msg = "Password is incorrect";
              header("Location:admin_login.php?Message=$msg");
            }
        }
    }
    else
    {
       echo "user does not exist";
        $msg = "Username does not exist";
        //header("Location:login.php?Message=$msg");
    }
?>