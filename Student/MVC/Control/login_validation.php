<?php
include("db.php");

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if (empty($email) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    
    $query = "SELECT * FROM users 
              WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['role'] = $row['role'];

        
        if ($row['role'] == "admin") {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: dashboard.php");
        }

    } else {
        echo "Invalid Email or Password!";
    }
}
?>