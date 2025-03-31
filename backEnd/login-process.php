<?php
session_start();
include 'config-database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id']; 
            $_SESSION['user_name'] = $user['name'];
            header("Location: ../frontEnd/index.php");
            exit();
        } else {
            $_SESSION['error'] = "mat khau khong dung!";
            header("Location: ../frontEnd/login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Email khong ton tai!";
        header("Location: ../frontEnd/login.php");
        exit();
    }
}
mysqli_close($conn);
?>