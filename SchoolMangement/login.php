<html>
<head>
    <title>Log In</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bclr{
            background: #F3F2F2;
        }
    </style>
</head>
<body class="bclr">
<form action='login_try.php' method='post'>
        <div class="page-header" align='center'>
            <h2>School Login</h2>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="text" name="txtUid" class="form-control col-sm-4" placeholder="User Id" required>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="password" name="txtPass" class="form-control col-sm-4" placeholder="Password" required>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type='submit' value='Log In' class="btn btn-primary col-sm-4">
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <?php 
                        if(isset($_GET["Message"]))
                        {
                            echo "<p class='alert alert-danger'>";
                            echo $_GET["Message"];
                            echo "</p>";
                        }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>                  

                    
</form>
</body>
</html>









