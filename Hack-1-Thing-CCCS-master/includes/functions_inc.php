<?php

function emptyInputSignup($uid, $uemail, $upwd, $upwdconfirm) {
    $result;
    if (empty($uid) || empty($uemail) || empty($upwd) || empty ($upwdconfirm)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUID($uid) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($uemail) {
    $result;
    if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($upwd, $upwdconfirm) {
    $result;
    if ($upwd !== $upwdconfirm) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $uid, $uemail) {
    $sql = "SELECT * FROM users WHERE usersUID = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $uid, $uemail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $uid, $uemail, $upwd) {
    $sql = "INSERT INTO users (usersEmail, usersUID, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($upwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $uemail, $uid, $hashedPwd);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../proj.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userID"] = $uidExists["usersID"];
        $_SESSION["userUID"] = $uidExists["usersUID"];
        header("location: ../proj.php?error=login");
        exit();
    }
}