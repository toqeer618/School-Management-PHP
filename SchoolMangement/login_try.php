<?php
    include "connect.php";
    session_start();

    $user = $_POST["txtUid"];
    $pass = $_POST["txtPass"];

     $qry =$con->query("SELECT * FROM student WHERE roll_no = '$user'") ;
    //echo $qry;
   // $res = $con->query($qry);

    if($qry->num_rows>0)
    {
        //user found
        if($row = $qry->fetch_assoc())
        {
            if($pass == $row["st_pass"])
            {
                //Valid user
                $_SESSION["roll_no"] = $user;
               // $_SESSION["type"] = $row["type"];
                $nam=$row["st_name"];
                echo "Hello";
                header("Location:st_main.php");
            }
            else
            {
                //Invalid Password
                $msg = "Password is incorrect";
                header("Location:login.php?Message=$msg");
            }
        }
    }
    else
    {
        //user does not exist
        $msg = "Username does not exist";
        header("Location:login.php?Message=$msg");
    }
?>