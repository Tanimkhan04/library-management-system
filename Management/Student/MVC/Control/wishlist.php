<?php
include("config.php");

$msg = "";

if (isset($_POST['add'])) {
    $msg = "Book added to Wishlist ❤️";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>WISHLIST</title>
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

.star {
  font-size: 30px;
  color: orange;
}
button {
  background-color: purple;
  color: white;
  padding: 10px;
  width: 100%;
  border: none;
  font-size: 16px;
  border-radius: 5px;
}
button:hover {
  background-color: indigo;
}




</style>
</head>
<body>

<h1>Wishlist</h1>

<form method="post">
  <p>Database Systems</p>
  <button name="add">Add to Wishlist</button>
</form>

<p style="color:blue;"><?php echo $msg; ?></p>

<a href="dashboard.php">Back</a>

</body>
</html>
