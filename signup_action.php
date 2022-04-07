<?php

require 'requires.php';


if (isset($_POST['signup'])) {




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

        $validity =  user_id_validate($user_id);



        if ($validity === '0') {

            session_start();

            $_SESSION['msg'] = 'USER ID ALREADY TAKEN';
            header('location: index.php');
        }

        if ($validity === '1') {


            $email_validity = user_email_validate($email);

            if ($email_validity === '0') {

                session_start();

                $_SESSION['msg'] = 'USER EMAIL ALREADY TAKEN';
                header('location: index.php');
            }


            if ($email_validity === '1') {


                $ssql = "insert into users (email, user_id, password, signup_time, user_ip) values (?,?,?,?,?)";

                $stmt = $conn->prepare($ssql);

                $stmt->bind_param('sssss', $email, $user_id, $hashed_password, $ts, $user_ip);

                $stmt_flag = $stmt->execute();

                if ($stmt_flag) {

                    session_start();
                    $_SESSION['msg'] = 'Successfully Signed UP ' . $user_id;

                    header('location: login.php');
                }
            }
        }
    }
}

//Writ.Peti_3106_2003
