<?php

$db=mysqli_connect('localhost','root','qwerty','student');	
session_start();
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['submit']))
	{
	$n=$_POST['userid'];
  $r=$_POST['pwd'];
  $c=$_POST['course'];
	$sql="INSERT INTO details (name,rollno,course)  VALUES ('$n','$r','$c')";
$q=mysqli_query($db,$sql);
if($q)
{
 echo "successfully inserted";

}
else
{
 echo "Unsuccess";
}	 
}

  ?>
  
