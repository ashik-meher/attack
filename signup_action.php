<?php

require 'requires.php';


if (isset($_POST['signup'])) {
    /*echo 'OK';

    $flag = isset($_POST['signup']);
    echo 'Flag is : ' . $flag . $br;
    $actual_value = $_POST['signup'];
    echo 'The value is now: ' . $actual_value;
    */



    if (empty($_POST['email']) or empty($_POST['user_id']) or empty($_POST['password'])) {
        header('location: index.php');
    }

    if (!empty($_POST['email']) and !empty($_POST['user_id']) and !empty($_POST['password'])) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $email = htmlspecialchars($email);


        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $user_id = htmlspecialchars($user_id);



        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = htmlspecialchars($password);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $ts = date('Y:m:d H:i:s');

        $user_ip = getUserIP();

        //echo $email;
        //echo $user_id;
        //echo $password;

        $ssql = "insert into users (email, user_id, password, signup_time, user_ip) values (?,?,?,?,?)";

        $stmt = $conn->prepare($ssql);

        $stmt->bind_param('sssss', $email, $user_id, $hashed_password, $ts, $user_ip);

        $stmt_flag = $stmt->execute();

        if ($stmt_flag) {
            //echo "Successfully Signed Up!";

            session_start();
            $_SESSION['msg'] = 'Successfully Signed UP ' . $user_id;

            header('location: login.php');
        }
    }
}
