
<?php
include("config.php");

$error = "";

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Server-side empty check
    if ($name == "" || $email == "" || $password == "") {
        $error = "All fields are required!";
    } else {

        // Check duplicate email
        $check = "SELECT * FROM students WHERE email='$email'";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0) {
            $error = "Email already registered!";
        } else {

            // Insert student
            $insert = "INSERT INTO students (name, email, password)
                       VALUES ('$name', '$email', '$password')";

            if (mysqli_query($conn, $insert)) {
                $_SESSION['student'] = $email;
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Registration failed!";
            }
        }
    }
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
  width: 320px;
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
  cursor: pointer;
}

button:hover {
  background-color: blue;
}

#error {
  color: red;
  text-align: center;
  margin-top: 10px;
}
</style>
</head>

<body>

<h1>Student Registration</h1>

<form method="post" onsubmit="return validateRegister()">

  Name:
  <input type="text" name="name" id="name">

  Email:
  <input type="text" name="email" id="email">

  Password:
  <input type="password" name="password" id="password">

  <button type="submit" name="register">Register</button>

</form>

<div id="error">
  <?php echo $error; ?>
</div>

<p style="text-align:center;">
Already have an account?
<a href="login.php">Login</a>
</p>

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

  return true; // allow PHP
}
</script>




</body>
</html>
