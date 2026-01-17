
<?php
include("config.php");

 $error = "";
 $password = "";
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
  <style>
body {
  background-color: lightblue;
  font-family: verdana;
}

form {
  background-color: white;
  width: 300px;
  padding: 20px;
  margin: auto;
}

h1 {
  text-align: center;
  color: darkblue;
}

input {
  width: 100%;
  margin-top: 10px;
  padding: 8px;
}

button {
  margin-top: 15px;
  width: 100%;
  background-color: darkblue;
  color: white;
}

button:hover {
  background-color: blue;
}

</style>
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