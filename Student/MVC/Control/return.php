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
