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

$s_id = $_POST['s_id'];
$s_pic = $_POST['s_pic'];
$s_name = $_POST['s_name'];
$s_tel = $_POST['s_tel'];
$s_card = $_POST['s_card'];
$fac_id = $_POST['fac_id'];


$fileupload = $_FILES['photo']['tmp_name'];
$fileupload_name =$_FILES['photo']['name'];

$sql = "SELECT * FROM student WHERE s_name = '$s_name' AND s_id != '$s_id'";
$total = mysql_query($sql,$conn);
if(mysql_num_rows($total) > 0){
    echo error_h3("นักเรียนซ้ำ","showstudent.php");
    return;
}

if($fileupload != ""){
    if($s_pic != ""){
        @unlink("picture/$s_pic");
    }
    copy($fileupload,"picture/".$fileupload_name);
    $sql = "UPDATE student SET s_name = '$s_name',s_tel = '$s_tel',fac_id = '$fac_id',s_pic = '$fileupload_name',s_card = '$s_card' WHERE s_id = '$s_id' ";
}else{
    $sql = "UPDATE student SET s_name = '$s_name',s_tel = '$s_tel',fac_id = '$fac_id',s_card = '$s_card' WHERE s_id = '$s_id' ";
}

mysql_query($sql,$conn)
or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยเเล้ว","showstudent.php");
?>
</body>
</html>