<?php



require 'requires.php';


if (isset($_POST['login'])) {
    if (empty($_POST['user_id']) or empty($_POST['password'])) {
        header('location: login.php');
    }

    if (!empty($_POST['user_id']) and !empty($_POST['password'])) {

        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $user_id = _e($user_id);


        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = _e($password);


        $ssql = "select user_id, email, password from users where user_id = '$user_id' ";

        $res = mysqli_query($conn, $ssql);


        $num_rows = mysqli_num_rows($res);


        $user_credentials = [];
        if ($num_rows == 1) {
            while ($user = mysqli_fetch_object($res)) {

                $verified = password_verify($password, $user->password);

                if ($verified) {
                    $user_credentials['user_email'] = $user->email;
                    $user_credentials['user_id'] = $user->user_id;

                    session_start();

                    $_SESSION['user_id'] = $user->user_id;
                    $_SESSION['user_email'] = $user->email;

                    header('location: home.php');
                } else {
                    header('location: login.php');
                }
            }
        } else {
            echo 'Invalid Username or Password or duplicate user creation attempt!';
        }
    }
}
