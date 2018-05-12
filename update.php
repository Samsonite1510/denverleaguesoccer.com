<?php
session_start();

?>


<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
}
</style>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">

                  <
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="up.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >


                        </fieldset>
                    </form>
                      <center><b>Haven't Registered Yet?</b> <br></b><a href="Registration.php">Register Here</a></center>
                        <center><b>Administrator Log In</b> <br></b><a href="Admin_login.php">Admin</a></center>>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("conn.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];
    $md5 = md5($user_pass);

    $check_user="SELECT * from Users WHERE user_email='$user_email'AND user_pass='$md5'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('mainmenu.php','_self')</script>";

        $_SESSION['email']=$user_email;

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
