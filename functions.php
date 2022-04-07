<?php



function _e($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}


function user_id_validate($user_id): string
{
    require './db/db.php';
    $vsql = "select * from users";

    $res = mysqli_query($conn, $vsql);

    $validate = '1';

    while ($user = mysqli_fetch_object($res)) {
        $db_user_id = $user->user_id;

        if ($db_user_id == $user_id) {
            $validate = '0';
        }
    }


    return $validate;
}


function user_email_validate($email): string
{
    require './db/db.php';
    $vsql = "select * from users";

    $res = mysqli_query($conn, $vsql);

    $validate = '1';

    while ($user = mysqli_fetch_object($res)) {
        $db_user_email = $user->email;

        if ($db_user_email == $email) {
            $validate = '0';
        }
    }


    return $validate;
}
