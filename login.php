<?php
session_start();
require_once("./config.php");
require_once("./helpers.php");

// get data from the form
if (isset($_POST['login'])) {

    $email =  filteration($_POST['email']);
    $password = filteration($_POST['password']);

    $get_users = "SELECT * FROM `users` WHERE email = '$email' AND status = 'active'";
    $result = mysqli_query($con, $get_users);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        // match the password of the user
        if ($row['password'] == $password) {
            $_SESSION['uid'] = $row['id'];
            $_SESSION['login'] = true;
            header("Location:index.php");
        } else {
            $_SESSION['erorr'] = "Inavlid Credionals";
        }
    } else {
        // if email is not matched
        $_SESSION['erorr'] = "Inavlid Credionals";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> Admin Login - Expense Tracker System</title>
    <!-- css file includes -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">



                <div class="account-box">
                    <!-- show error when creditonals are wrong -->
                    <?php

                    if (!empty($_SESSION['erorr'])) {
                        $msg = $_SESSION['erorr'];
                        echo "
                        <div class='alert alert-danger alert-dismissible fade show ' id='notification' role='alert'>
                        <strong>Error!</strong> $msg
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>×</span>
                        </button>
                    </div>";
                    }
                    unset($_SESSION['erorr']);

                    ?>


                    <!-- .....Login Form start here..... -->

                    <form action="" method="post" class="form-signin">
                        <div class="account-logo">
                            <h2>Admin <span class="text-primary"> Login</span></h2>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Enter here..." name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter here..." name="password" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name="login">Login</button>
                        </div>
                    </form>

                    <!-- .....Login Form end here..... -->

                </div>
            </div>
        </div>
    </div>

</body>

<!-- js file includes -->
<?php require_once("./includes/javascript-links.php") ?>

</html>