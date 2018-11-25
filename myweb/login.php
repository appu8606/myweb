<?php

$db=mysqli_connect('localhost','root','qwerty','test');	
session_start();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_GET['submit']))
	{
	$u=$_GET['user'];
	$p=$_GET['psw'];
	$sql="INSERT INTO users (username, password )  VALUES('$u','$p')";
$q=mysqli_query($db,$sql);
		

if($q)
{
 echo "successfully login";

}
else
{
 echo "Unsuccess";
}	
 
}

  ?>
  
