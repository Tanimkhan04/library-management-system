
<?php
session_start();
session_destroy();
setcookie("student_email","",time()-3600,"/");
header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightblue;
  font-family: verdana;
}

p {
  font-size: 20px;
  text-align: center;
  color: gray;
}
</style>
</head>

<body>
<p>You have successfully logged out.</p>

</body>
</html>