<?php session_start(); ?>


<?php if ($_SESSION['user_id'] == '') :
    header('location: index.php');
endif; ?>
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

                <?php if (isset($_SESSION['user_id'])) : ?>



                    <p>Welcome Home! <?= $_SESSION['user_id']; ?></p>

                    <a href="logout.php">Logout <?= $_SESSION['user_id']; ?></a>





                <?php else : ?>

                    <a href="login.php">Login Here!</a>

                <?php endif; ?>



                <?php

                require './db/db.php';

                $ssql = "select id, user_id, email from users";

                $res = mysqli_query($conn, $ssql);

                $num_rows = mysqli_num_rows($res);

                echo 'Users: ' . $num_rows;

                ?>


                <!-- spec layout should start here -->


                <?php

                foreach ($res as $user) :

                ?>
                    <div class="card" style="padding:20px; margin:10px">
                        <p><?= $user['id']; ?></p>
                        <p><?= $user['user_id']; ?></p>
                        <p><?= $user['email']; ?></p>
                        <a href="./users/user_view.php?id=<?= urlencode($user['id']); ?>" class="btn btn-primary">View Profile</a>
                        <a href="./users/message.php?id=<?= urlencode($user['id']); ?>" class="btn btn-danger">Chat</a>


                    </div>



                <?php

                endforeach;

                ?>


                <!-- spec layout should end here -->





            </div>
        </div>
    </div>






</body>

</html>