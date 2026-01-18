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
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
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
  padding: 8px;
}

button:hover {
  background-color: blue;
}

a {
  display: block;
  text-align: center;
  margin-top: 10px;
}

#error {
  color: red;
  text-align: center;
  margin-top: 10px;
}
</style>
</head>

<body>

<h1>Student Login</h1>

<form method="post" onsubmit="return validateLogin()">

  Email:
  <input type="text" id="email" name="email">

  Password:
  <input type="password" id="password" name="password">

  <button type="submit" name="login">Login</button>

</form>

<a href="register.php">New user? Register here</a>

<div id="error"><?php echo $error; ?></div>

<script>
function validateLogin()
{
  var email = document.getElementById("email").value.trim();
  var password = document.getElementById("password").value.trim();
  var errorDiv = document.getElementById("error");

  if(email === "" || password === "")
  {
    errorDiv.innerHTML = "Please fill all fields";
    return false;
  }

  var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if(!email.match(emailPattern))
  {
    errorDiv.innerHTML = "Invalid email format";
    return false;
  }

  if(password.length < 4)
  {
    errorDiv.innerHTML = "Password must be at least 4 characters";
    return false;
  }

  return true;
}
</script>

</body>
</html>
