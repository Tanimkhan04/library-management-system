<?php
include("config.php");

$msg = "";

if (isset($_POST['return'])) {
    $msg = "Return Request Submitted Successfully ✅ ";
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
  background-color: burlywood;
  color: black;
  padding: 10px;
  width: 100%;
  border: none;
  font-size: 16px;
  border-radius: 5px;
}

button:hover {
  background-color: sandybrown;
}

</style>

</head>
<body>

<h1>Return Book</h1>


<form method="post">
  <input type="text" name="book" placeholder="Enter book name">
  <br><br>

<form method="post">
  <button name="return">Submit Return Request</button>
</form>

<p style="color:green;"><?php echo $msg; ?></p>

<a href="dashboard.php">Back</a>

</body>
</html>
