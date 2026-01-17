<?php
include("config.php");

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = $_POST['password'];
    $_SESSION['student'] = $email;

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>

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
}

#error {
  text-align: center;
  color: red;
  margin-top: 10px;
}
</style>
</head>

<body>

<h1>Student Registration</h1>

<form method="post" onsubmit="return validateRegister()">

  Name:
  <input type="text" id="name" name="name">

  Email:
  <input type="text" id="email" name="email">

  Password:
  <input type="password" id="password" name="password">

  <button type="submit" name="register">Register</button>
</form>

<div id="error"></div>

<script>
function validateRegister()
{
  var name = document.getElementById("name").value.trim();
  var email = document.getElementById("email").value.trim();
  var password = document.getElementById("password").value.trim();
  var errorDiv = document.getElementById("error");

  if(name === "" || email === "" || password === "")
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
