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

$p_id = $_POST['p_id'];
$p_pic = $_POST['p_pic'];
$p_name = $_POST['p_name'];
$p_tel = $_POST['p_tel'];
$p_card = $_POST['p_card'];
$fac_id = $_POST['fac_id'];


$fileupload = $_FILES['photo']['tmp_name'];
$fileupload_name =$_FILES['photo']['name'];

$sql = "SELECT * FROM personal WHERE p_name = '$p_name' AND p_id != '$p_id'";
$total = mysql_query($sql,$conn);
if(mysql_num_rows($total) > 0){
    echo error_h3("นักเรียนซ้ำ","showpersonal.php");
    return;
}

if($fileupload != ""){
    if($p_pic != ""){
        @unlink("picture/$p_pic");
    }
    copy($fileupload,"picture/".$fileupload_name);
    $sql = "UPDATE personal SET p_name = '$p_name',p_tel = '$p_tel',fac_id = '$fac_id',p_pic = '$fileupload_name',p_card = '$p_card' WHERE p_id = '$p_id' ";
}else{
    $sql = "UPDATE personal SET p_name = '$p_name',p_tel = '$p_tel',fac_id = '$fac_id',p_card = '$p_card' WHERE p_id = '$p_id' ";
}

mysql_query($sql,$conn)
or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยเเล้ว","showpersonal.php");
?>
</body>
</html>