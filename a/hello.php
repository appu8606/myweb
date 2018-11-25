
<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from registration where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from users";    
$result = mysql_query($sql);    
?> 

<!DOCTYPE html>
<html>
<body>
<h1 >My First Heading</h1>
<form action="hello.php" method="post">
<input type="hidden" name="submitted" value="true" />
  User name:<br>
  <input type="text" name="username"><br>
  User password:<br>
  <input type="password" name="psw"><br>
   <input type="submit" value="Submit">
</form>

</body>
</html>