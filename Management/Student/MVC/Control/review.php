<?php
include("config.php");

$msg = "";

if (isset($_POST['submit'])) {
    $msg = "Thank you for your review ⭐ ";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Rate & Review</title>
  <style>
body {
  background-color: lightblue;
  font-family: verdana;
}

div {
  background-color: white;
  width: 320px;
  padding: 20px;
  margin: auto;
  border-radius: 10px;
}

h2 {
  color: darkblue;
  text-align: center;
}

textarea {
  width: 100%;
  height: 80px;
  margin-top: 10px;
  padding: 8px;
}

button {
  margin-top: 10px;
  width: 100%;
  background-color: darkgreen;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
}

button:hover {
  background-color: green;
}



</style>
</head>
<body>

<h1>Rate & Review Book</h1>

<form method="post">
  Rating:
  <select>
    <option>*</option>
    <option>**</option>
    <option>***</option>
    <option>****</option>
    <option>*****</option>
  </select>
  <br><br>

  Review:<br>
  <textarea rows="4" cols="30"></textarea><br><br>

  <button name="submit">Submit</button>
</form>

<p style="color:green;"><?php echo $msg; ?></p>

<a href="dashboard.php">Back</a>

</body>
</html>
