<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search Book</title>
</head>
<body>

<h1>Search Book</h1>

<form method="post">
  <input type="text" name="book" placeholder="Enter book name">
  <br><br>
  <button name="search">Search</button>
</form>

<?php
if (isset($_POST['search'])) {
    echo "<p>Book Found! Request Sent ✔</p>";
}
?>

<a href="dashboard.php">Back</a>

</body>
</html>
