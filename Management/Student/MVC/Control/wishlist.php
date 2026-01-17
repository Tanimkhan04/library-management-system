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
  <title>Wishlist</title>
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
