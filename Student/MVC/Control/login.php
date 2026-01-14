<?php
include("config.php");

$error = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if ($email == "www.tanim.khan60@gmail.com" && $password == "1234") {
        $_SESSION['student'] = $email;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Login</title>
</head>
<body>

<h1>Student Login</h1>

<form method="post">
  Email:<br>
  <input type="text" name="email"><br><br>

  Password:<br>
  <input type="password" name="password"><br><br>

  <button name="login">Login</button>
</form>

<p style="color:red;"><?php echo $error; ?></p>

</body>
</html>
