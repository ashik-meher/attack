<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attack</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <a href="index.php">Sign Up</a>

                <div class="row" id="session-msg">

                    <?php if (isset($_SESSION['msg'])) : ?>

                        <?php echo $_SESSION['msg']; ?>

                    <?php endif; ?>

                </div>

                <form action="login_action.php" id="login-form" method="POST">



                    <div class="form-group">
                        <label for="exampleInputEmail1">User ID</label>
                        <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter user id" required>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>



                    <input type="submit" name="login" class="btn btn-primary" value="Login" style="margin: 10px 0;">

                </form>

            </div>
        </div>
    </div>






</body>

</html>