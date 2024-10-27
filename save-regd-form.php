<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
include 'db.php';
$tail = $_POST['tail'];

if ($tail == 1) {
    $name = $_POST['name'];
    $scname = $_POST['scname'];
    $rank = $_POST['rank'];
    $sccode = $_POST['sccode'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];

    $_SESSION['user'] = 'stu103187@xeneen.com';
    $cur = date('Y-m-d H:i:s');
    $ip = '127.0.0.01';
    $brow = "Google Chrome";
    $comm = "....";

    $query37 = "insert into reqnew(id, reqname, rank, scname, sccode, mno, email, reqtime, ipaddress, browser, comments)
VALUES (NULL,   '$name',   '$rank',   '$scname',   '$sccode',   '$mno',   '$email',   '$cur',   '$ip',   '$brow',   '$comm');";
    $conn->query($query37);
    ?>

    <p><b>Thank you for your sumission.</b></p>
    <p>
        Your request has been submitted successfully. A support team member will contact with you as soon as possible.
    </p>
    <br>
    <a class="btn btn-success nav-pills" href="http://localhost/eimbox-dashboard/eimbox-panel/login.php">Visit Demo</a>
    <?php
} else if ($tail == 2) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    // $_SESSION['user'] = 'stu103187@xeneen.com';
    $cur = date('Y-m-d H:i:s');
    $ip = '127.0.0.01';
    $brow = "Google Chrome";
    $comm = "....";

    $query37 = "insert into reqquery(id, reqname, email, msg, reqtime, ipaddress, browser, comments)
VALUES (NULL,   '$name',    '$email', '$msg',  '$cur',   '$ip',   '$brow',   '$comm');";
    $conn->query($query37);
    ?>

        <p><b>Thank you for your sumission.</b></p>
        <p>
            Your query has been submitted successfully. A support team member will contact with you as soon as possible.
        </p>
    <?php
}
