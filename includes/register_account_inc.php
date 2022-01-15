<?php

if (isset($_POST["submit"])) {
    $uid = $_POST["uname"];
    $uemail = $_POST["email"];
    $upwd = $_POST["pwd"];
    $upwdconfirm = $_POST["pwdconfirm"];

    require_once 'dbh_inc.php';
    require_once 'functions_inc.php';

    if (emptyInputSignup($uid, $uemail, $upwd, $upwdconfirm) !== false) {
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if (invalidUID($uid) !== false) {
        header("location: ../register.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($uemail) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($upwd, $upwdconfirm) !== false) {
        header("location: ../register.php?error=nopwdmatch");
        exit();
    }
    if (uidExists($conn, $uid, $uemail) !== false) {
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($conn, $uid, $uemail, $upwd);
}
else {
    header("location: ../register.php");
    exit();
}