<?php include '../inc/header.php'; ?>


<?php

//sanitize 
//$page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['page']);

require '../db/db.php';

require '../functions.php';

if (empty($_GET['id'])) {
    echo "No search Parameter selected!";
    exit();
}

$id = $_GET['id'];
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

$user = mysqli_fetch_assoc($res);
//var_dump($user);


?>


<div class="container">

    <p>User Name: <?= $user['user_id']; ?></p>
    <p>App Email: <?= $user['email']; ?></p>


    <a href="message.php?id=<?= $user['id']; ?>" class="btn btn-primary">Message</a>



</div>




<?php include '../inc/footer.php'; ?>