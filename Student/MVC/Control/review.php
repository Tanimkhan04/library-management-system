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
