<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search Book</title>
  <style>
body {
  background-color: lightpink;
  font-family: verdana;
}

input {
  width: 300px;
  padding: 8px;
}

button {
  padding: 8px;
  background-color: darkblue;
  color: white;
}
button:hover {
  background-color: blue;
}
a {
  display: block;
  margin-top: 20px;
  color: darkblue;
}
a:hover {
  color: blue;
}


</style>
</head>
<body>

<h1>Search Book</h1>

<form method="post">
  <input type="text" name="book" placeholder="Enter book name">
  <br><br>
  <button name="Search">Search</button>
</form>

<?php
if (isset($_POST['Search'])) {
    echo "<p>Book Found! Request Sent </p>";
}
?>

<a href="dashboard.php">Back</a>

</body>
</html>
