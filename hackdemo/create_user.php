<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include "functions.php";
	include_once 'Database.php';
	$db=new Database();
	$user_name=test_input($_POST["user_name"]);
	$pswd=test_input($_POST["password"]);
	$query="insert into users values('$pswd','$user_name')";
				if(mysqli_query($db->link,$query)){
					header('location:index.php');
				}
}
?>
<!DOCTYPE html>
<html>

<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>CreativeFrame Soft India</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 

</head>
<body>

<header class="header">
<div class="container">
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav navbar-right">
            </ul>
          </div>
        </div>
      </nav>
</div>
    </header>
   <section class="middle">
<div class="form-outer">
<h1>Register</h1>
<h2>Save A username and password</h2>
        <form action="" method="post" name="login_form"> 	
<div class="row1 clearfix">
<div class="ico"><span class="icon-user"></span></div>		
           <input type="text" name="user_name" placeholder="User Name" required="true"/></div>

<div class="row1 clearfix">
<div class="ico"><span class="icon-lock"></span></div>
<input type="password" name="password" id="password" required="true" placeholder="Password"/>
</div>

            <input class="submit" type="Submit"  value="Register Me" />
        </form>
		</div>
</section>

<!--End Middle-->

<!--Start Footer-->

<footer class="footer">
<div class="container">
<p>© 2016-2017 sourcesunlimited. 
<span>All rights reserved.</span> </p>
</div>

</footer>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
