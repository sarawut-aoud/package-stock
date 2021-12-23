<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php
    include 'script.php';
    include  'script2.php';
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
    switch ($user_status){
        case $user_status =='1':
            $sql = "SELECT * FROM teacher WHERE t_card = '$login' ";
            $result = mysql_query($sql);
            $total = mysql_num_rows($result);
            if ($total && $password == '1234') {
                session_start();
                $_SESSION["valid_uname"] = $login;
                $_SESSION["valid_pwd"] = $password;
                $_SESSION["u_stat"] = $user_status;
                mysql_close($conn);
                echo success("ยินดีต้อนรับ",'index_teacher.php');
                exit();
            } else {
                echo error("ไม่พบผู้ใช้");
                break;
            }
        case  $user_status =='3':
            $sql2 = "SELECT * FROM student WHERE s_card = '$login' ";
            $result2 = mysql_query($sql2);
            $total = mysql_num_rows($result2);
            if ($total && $password == '1234') {
                session_start();
                $_SESSION["valid_uname"] = $login;
                $_SESSION["valid_pwd"] = $password;
                $_SESSION["u_stat"] = $user_status;
                mysql_close($conn);
                echo success("ยินดีต้อนรับ",'index_student.php');
                exit();
            } else {
                echo error("ไม่พบผู้ใช้");
                break;
            }
        case  $user_status =='2':
            $sql3 = "SELECT * FROM personal WHERE p_card = '$login' ";
            $result3 = mysql_query($sql3);
            $total = mysql_num_rows($result3);
            if ($total && $password == '1234') {
                session_start();
                $_SESSION["valid_uname"] = $login;
                $_SESSION["valid_pwd"] = $password;
                $_SESSION["u_stat"] = $user_status;
                mysql_close($conn);
                echo success("ยินดีต้อนรับ",'index_personal.php');
                exit();
            } else {
                echo error("ไม่พบผู้ใช้");
                break;
            }

    }
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
} else {
    echo error("ขออภัย...!..กรุณากรอกข้อมูลให้ครบ");
    exit();
    }
   /* if ($user_status == '1') {
        $sql = "SELECT * FROm teacher WHERE t_card = '$login' ";
        $result = mysql_query($sql);
        $total = mysql_num_rows($result);
        if ($total && $password == '1234') {
            session_start();
            $_SESSION["valid_uname"] = $login;
            $_SESSION["valid_pwd"] = $password;
            $_SESSION["u_stat"] = $user_status;
            mysql_close($conn);
            echo success("ยินดีต้อนรับ",'index_teacher.php');
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
    echo error("ขออภัย...!..กรุณากรอกข้อมูลให้ครบ");
    exit();
   */

?>
</body>
</html>