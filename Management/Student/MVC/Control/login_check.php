<?php
session_start();
include("config.php");


$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);


if (!$data || !isset($data['email']) || !isset($data['password'])) {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request data"
    ]);
    exit();
}

$email = mysqli_real_escape_string($conn, $data['email']);
$password = mysqli_real_escape_string($conn, $data['password']);

$query = "SELECT * FROM students WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {

    $_SESSION['student'] = $email;

    
    setcookie("student_email", $email, time() + 86400, "/");

    echo json_encode([
        "status" => "success",
        "message" => "Login successful"
    ]);

} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid Email or Password"
    ]);
}



?>
