<?php
session_start();
include('server.php');

$errors = array();

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $query2 = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
            $row = mysqli_fetch_assoc($query2);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $username;
            $_SESSION['status'] = $row['status'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['success'] = "You are now logged in";
            header("location: ../userindex.php");
        } else {
            array_push($errors, "Wrong username/password combination");
            $_SESSION['error'] = "กรอกชื่อผู้ใช้/รหัสผ่านให้ถูกต้อง!";
            header("location: ../login.php");
        }
    }
}
?>