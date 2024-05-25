<?php

session_start();

if ($_SESSION['login'] == false && !isset($_SESSION['uid'])) {
    header("Location:login.php");
} else {

    require_once("./config.php");

    $get_users = "SELECT * FROM `users` WHERE id = '$_SESSION[uid]'";
    $result = mysqli_query($con, $get_users);

    $row = mysqli_fetch_assoc($result);

    $_SESSION['uname'] = $row['name'];
    $_SESSION['uemail'] = $row['email'];
    $_SESSION['urole'] = $row['role'];
    $_SESSION['ustatus'] = $row['status'];
}
