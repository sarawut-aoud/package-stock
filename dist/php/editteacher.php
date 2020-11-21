<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<?php
include "connect.php";
;include 'script2.php';
include "script.php";
include "alert.php";

$t_id = $_POST['t_id'];
$t_pic = $_POST['t_pic'];
$t_name = $_POST['t_name'];
$t_tel = $_POST['t_tel'];
$fac_id = $_POST['fac_id'];


$fileupload = $_FILES['photo']['tmp_name'];
$fileupload_name =$_FILES['photo']['name'];

$sql = "SELECT * FROM teacher WHERE t_name = '$t_name' AND t_id != '$t_id'";
$total = mysql_query($sql,$conn);
if(mysql_num_rows($total) > 0){
    echo error_h3("นักเรียนซ้ำ","showteacher.php");
    return;
}

if($fileupload != ""){
    if($t_pic != ""){
        @unlink("picture/$t_pic");
    }
    copy($fileupload,"picture/".$fileupload_name);
    $sql = "UPDATE teacher SET t_name = '$t_name',t_tel = '$t_tel',fac_id = '$fac_id',t_pic = '$fileupload_name' WHERE t_id = '$t_id' ";
}else{
    $sql = "UPDATE teacher SET t_name = '$t_name',t_tel = '$t_tel',fac_id = '$fac_id' WHERE t_id = '$t_id' ";
}

mysql_query($sql,$conn)
or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยเเล้ว","showteacher.php");
?>
</body>
</html>