<?php
session_start();

require '../db/db.php';

require '../functions.php';

require '../miss/mis.php';

//rtc func

$id = mysqli_real_escape_string($conn, $_GET['id']);
$id = _e($id);


$user_sql = "select id,user_id, email from users where id = '$id' ";

$res = mysqli_query($conn, $user_sql);

$res_rturn_type = gettype($res);

if ($res_rturn_type === 'boolean') {
    echo "SERVER HAS BEEN ATTACKED! SHUTDOWN IN 30 SECONDS";
    exit();
}


$num_rows = mysqli_num_rows($res);


if ($num_rows != 1) {
    echo "Unexpected User Missing!";
    exit();
}

//get recepient credensials
$user = mysqli_fetch_assoc($res);

$recepient_id = $user['user_id'];

$sender_id = $_SESSION['user_id'];

//get thread chat data

$csql = "select id, sender_id, recepient_id, msg, date, ts from chat_msg where recepient_id='$recepient_id' and sender_id = '$sender_id' or recepient_id= '$sender_id' and sender_id ='$recepient_id' order by id asc ";

$cres = mysqli_query($conn, $csql);

$chat_history_log = mysqli_num_rows($cres);

if ($chat_history_log < 1) :
    echo "No Chat History Found!";
endif;

if ($chat_history_log >= 1) :
    while ($msg = mysqli_fetch_object($cres)) :
        echo $msg->msg . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . 'by ' . '&nbsp' . $msg->sender_id . '&nbsp' . '&nbsp' . 'at: ' . '&nbsp' . $msg->ts . $br;
    endwhile;
endif;
