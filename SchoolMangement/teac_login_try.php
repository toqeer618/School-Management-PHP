<?php
    include "connect.php";
    session_start();

    $user = $_POST["txtUid"];
    $pass = $_POST["txtPass"];

   $qry =$con->query("SELECT * FROM Teacher WHERE Teach_ID = '$user'") ;
    //echo $qry;
   

    if($qry->num_rows>0)
    {
        //user found
        if($row = $qry->fetch_assoc())
        { 

            
            if($pass == $row["teach_pass"])
            {
                $tname= $row["teach_name"];
               //$use=$row["teach_ID"];
                //$_SESSION["type"] = $row["type"];
                    header("Location:teacher_main.php?name=$tname&id=$user");
            }
            else
            {
                //Invalid Password
                $msg = "Password is incorrect";
                header("Location:teac_login.php?Message=$msg");
            }
        }
    }
    else
    {
        //user does not exist
        $msg = "User does not exist";
        header("Location:login.php?Message=$msg");
    }
?>