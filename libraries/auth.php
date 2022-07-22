<?php
function isLogin()
{
    session_start();
    if (!isset($_SESSION['valid'])) {
        header("location:login.php");
        exit(0);
    }
}
function isValidUser($username, $password)
{
    $result = dbSelect("tbl_user", "*", "username = '$username' and password = md5('" . $password . "')", "");
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_array($result);
        return $row['fullname'];
    } else {
        return null;
    }
}