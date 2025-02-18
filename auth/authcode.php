<?php
// 用户认证代码
session_start();

function generateAuthCode($length = 6) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $length);
}

$_SESSION['authcode'] = generateAuthCode();
echo $_SESSION['authcode'];
?>
