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

                    <!-- .....Login Form start here..... -->

                    <form action="" class="form-signin">
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
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
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