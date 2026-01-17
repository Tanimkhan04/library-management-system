<?php
include("config.php");

$msg = "";

if (isset($_POST['return'])) {
    $msg = "Return Request Submitted Successfully ✔";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Return Book</title>
  <style>
body {
  background-color: lightblue;
  font-family: verdana;
}

div {
  background-color: white;
  width: 300px;
  padding: 20px;
  margin: auto;
  text-align: center;
  border-radius: 10px;
}

h2 {
  color: darkblue;
}

button {
  background-color: orange;
  color: black;
  padding: 10px;
  width: 100%;
  border: none;
  font-size: 16px;
  border-radius: 5px;
}

button:hover {
  background-color: darkorange;
}
</style>

</head>
<body>

<h1>Return Book</h1>

<p>Book: Web Technology</p>

<form method="post">
  <button name="return">Submit Return Request</button>
</form>

<p style="color:green;"><?php echo $msg; ?></p>

<a href="dashboard.php">Back</a>

</body>
</html>
