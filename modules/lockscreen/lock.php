<?php
session_start();
if (! isset($_SESSION ['max'])) {
    $_SESSION ['max'] = 3;
}
/**
 * 维持 session 登陆状态
 */
function public_session_life()
{
    $userid = $_SESSION ['userid'];
    return true;
}
// 锁屏功能
function public_lock_screen()
{
    $_SEESION ['lock_screen'] = 1;
}
function unset_lock_session()
{
    unset($_SEESION ['max']);
}
function public_login_screenlock()
{
    if (empty($_GET ['lock_password'])) {
        echo 1; // echo '请输入密码';
        exit();
    } else if ($_SESSION ['max'] < 0) {
        // echo '请等等再来尝试';
        echo 0;
        exit();
    }
    if ($_GET ['lock_password'] != 'xdfsd2.x0;2') {
        $_SESSION ['max'] = $_SESSION ['max'] - 1;
        // echo '你还有 '.$_SESSION['max'].' 尝试的机会';
        echo $_SESSION ['max'];
        exit();
    }
    
}
if (@$_GET ['a'] == 'public_lock_screen') {
    public_lock_screen();
} elseif (@$_GET ['a'] == 'public_login_screenlock') {
    public_login_screenlock();
} elseif (@$_GET ['a'] == 'unset_lock_session') {
    unset_lock_session();
}
?>