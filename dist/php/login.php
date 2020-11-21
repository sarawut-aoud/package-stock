<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php
    include 'script.php';
    ?>
</head>
<body>
<?php
ob_start();
include "connect.php";
include "alert.php";

$login = $_POST['login'];
$password = $_POST['password'];
$user_status = $_POST['user_status'];

if (!empty($login) && !empty($password)) {
    if ($user_status == '1') {
        $sql = "SELECT * FROm teacher WHERE t_username = '$login' AND t_password = '$password'";
        $result = mysql_query($sql);
        $total = mysql_num_rows($result);
        if ($total) {
            session_start();
            $_SESSION["valid_uname"] = $login;
            $_SESSION["valid_pwd"] = $password;
            $_SESSION["u_stat"] = $user_status;
            mysql_close($conn);
            echo success("ยินดีต้อนรับ",'frm_editme.php');
            exit();
        } else {
            echo error("ไม่พบผู้ใช้");
            exit();
        }
    } else {
        if ($login == "Admin" && $password == "Admin") {
            session_start();
            $_SESSION["valid_uname"] = $login;
            $_SESSION["valid_pwd"] = $password;
            $_SESSION["u_stat"] = $user_status;
            mysql_close($conn);
            echo success("ยินดีต้อนรับ",'index_admin.php');
            exit();
        } else {
            echo error("ไม่พบผู้ใช้");
            exit();
        }
    }
} else {
    /*echo error("ขออภัย...!..กรุณากรอกข้อมูลให้ครบ");*/
    exit();
}
?>
</body>
</html>