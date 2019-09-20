<!DOCTYPE html>
<html>
<title>Login Form</title>
<head>
<link rel="stylesheet" type="text/css" href="css\mystyles.css" />    
<?php
include('config.php');
?>


 <script src="jquery-3.3.1.min.js"></script>
 <script>
$(document).ready(function(){
	$(".register-box").hide();    
    $("#show").click(function(){
		$(".login-box").hide();
        $(".register-box").fadeIn(200);
    });
	$("#hide").click(function(){
		$(".login-box").fadeIn(200);
        $(".register-box").hide();
    });
});
</script>
</head>
<body>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="login-block login-box">
    <div class="logo">
    	<img src="22.png"/>
    </div>
    <form action="check-login.php" method="post">
	    <input type="text" placeholder="Username" id="username" name="username" class="username"/>
	    <input type="password" placeholder="Password" id="password" name="password" class="password"/>
	    <input type="submit" value="Log In" id="loginbutton" name="loginbutton" class="login"/>
    </form>
    <p style="text-align:center; font-size:14px">Not registered ? <strong style="color:#ff656c" id="show" >Create an account</strong></p>
</div>
<div class="login-block register-box">
    <div class="logo">
    	<img src="21.png"/>
    </div>
	<form action="" method="post">    
	    <input type="text" placeholder="Full Name" id="reg_fullname" name="reg_fullname" class="fullname"/>
    	<input type="text" placeholder="Username" id="reg_username" name="reg_username" class="username" />
	    <input type="password" placeholder="Password" id="reg_password" name="reg_password" class="password" />
		<input type="submit" value="Register" id="newreg" name="newreg" class="login"/>
	</form>
    <p style="text-align:center; font-size:14px">Have an account ? <strong style="color:#08C400" id="hide">Sign In</strong></p>
<?php
  if (isset($_REQUEST["newreg"]))
  {
	  $rf=$_POST["reg_fullname"];
	  $ru=$_POST["reg_username"];
	  $rp=$_POST["reg_password"];
	    
$q="insert into user (regfullname,regusername,regpassword) values ('$rf','$ru','$rp')";
header('location:chat.php');
mysql_query($q);
  }
?>

</div>
</body>
</html>
