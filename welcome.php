<?php
  session_start();
  if(isset($_SESSION['uname'])){
   echo "Welcome ".$_SESSION['uname']."Your Password: ".$_SESSION['pass'];

  

} else {
	echo "<script> location.href='login.php' </script>";
}

if (isset($_POST['logout'])) {
     session_unset();
     session_destroy();
     echo "<script> location.href='login.php' </script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
   <form method="POST">
   	<input type="submit" value="logout" name="logout">
   </form>
</body>
</html>