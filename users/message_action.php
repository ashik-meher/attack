<?php include '../inc/header.php'; ?>


<?php

//date_default_timezone_set('Asia/Dhaka');

require '../config/localization.php';

require '../db/db.php';

require '../functions.php';

$msg = mysqli_real_escape_string($conn, $_POST['msg']);
$msg = _e($msg);

$id = mysqli_real_escape_string($conn, $_POST['recepient_id']);
$id = _e($id);

//echo $msg;
//echo $id;

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

$user = mysqli_fetch_assoc($res);

$recepient_user_id = $user['user_id'];
$recepient_email = $user['email'];

$date = date('Y:m:d');

$ts = date('Y:m:d H:i:s');

$sender_user_id = $_SESSION['user_id'];
$sender_user_email = $_SESSION['user_email'];


$isql = "insert into chat_msg ( sender_id, recepient_id, msg, date, ts) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($isql);

$stmt->bind_param('sssss', $sender_user_id, $recepient_user_id, $msg, $date, $ts);

$stmt_flag = $stmt->execute();

if ($stmt_flag) {
    echo "seccessfull";
    header('location: message.php?id=' . $id);
}

//header('location: message.php');

/*
id,

sender_id,

recepient_id,

msg,

date,

ts
*/










?>







<?php include '../inc/footer.php'; ?>