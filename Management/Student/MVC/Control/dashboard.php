<?php
include("config.php");

if (!isset($_SESSION['student'])) 
{
    header("Location: login.php"); 

}
?>

<!DOCTYPE html>

<html>
<head>
  <style>
body {
  background-color: lightblue;
  font-family: verdana;
}

h1 {
  color: white;
  text-align: center;
}

div {
  background-color: white;
  padding: 20px;
  width: 400px;
  margin: auto;
}
</style>


  
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['student']; ?></h1>

<ul>
  <li><a href="search.php">Search & Request Book</a></li>
  <li><a href="borrowed.php">Borrowed Books</a></li>
  <li><a href="return.php">Return Book</a></li>
  <li><a href="wishlist.php">Wishlist</a></li>
  <li><a href="review.php">Rate & Review</a></li>
</ul>

<a href="logout.php">Logout</a>

</body>
</html>
