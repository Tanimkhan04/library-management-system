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
  background-color: burlywood;
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
ul {
  list-style-type: none;
  padding: 0;
  width: 200px;
  margin: auto;
}
li {
  background-color: white;
  margin: 10px 0;
  padding: 10px;
  text-align: center;
}
a {
  text-decoration: none;
  color: darkblue;
}
a:hover {
  color: blue;
}
button {
  margin-top: 15px;
  width: 10%;
  background-color: darkblue;
  color: brown;
}
button:hover {
  background-color: blue;
}
button {
  margin-top: 15px;
  width: 100%;
  background-color: darkblue;
  color: white;
}
button:hover {
  background-color: blue;
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


  <li><a href="logout.php">Logout</a></li>
</ul>


</body>
</html>
