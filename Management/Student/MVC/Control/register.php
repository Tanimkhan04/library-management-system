
<?php
include("config.php");

$error = "";

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Empty check
    if ($name == "" || $email == "" || $password == "") {
        $error = "All fields are required!";
    } else {

        // Check if email already exists
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

<form method="post">

  Name:
  <input type="text" name="name">

  Email:
  <input type="text" name="email">

  Password:
  <input type="password" name="password">

  <button type="submit" name="register">Register</button>

</form>

<div id="error">
  <?php echo $error; ?>
</div>

<p style="text-align:center;">
Already have an account?  
<a href="login.php">Login</a>
</p>

</body>
</html>
