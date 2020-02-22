<?php
  session_start();
  if(!isset($_SESSION['uname'])){
  if(isset($_POST['Username']) || isset($_POST['password']))
  {	
  $uname = $_POST['Username'];
  $pass = $_POST['password'];
  $_SESSION['uname']=$uname;
  $_SESSION['pass']=$pass;
  echo "<script> location.href='welcome.php' </script>";
  }
}
else{
	echo "<script> location.href='welcome.php' </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
  <form method="POST">
  	
  	<p>Username: <input type="text" name="Username" id="Username"></p>
  	<p>Password: <input type="text" name="password" id="password"></p>
  	<p><input type="submit" value="login" name="login"></p>
  </form>
</body>
</html>