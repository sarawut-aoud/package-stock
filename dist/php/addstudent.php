<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<?php
include "connect.php";
include  'script2.php';
include "script.php";
include "alert.php";

$s_name = $_POST['s_name'];
$s_tel = $_POST['s_tel'];
$fac_id = $_POST['fac_id'];
$s_card = $_POST['s_card'];

$fileupload = $_FILES['photo']['tmp_name'];
$fileupload_name = uniqid().$_FILES['photo']['name'];
if($s_name && $s_tel){
    $sql = "SELECT * FROM student WHERE s_name = '$s_name'";
    $result = mysql_query($sql,$conn);
    $total = mysql_fetch_array($result);

    if($total == 0){
        if($fileupload != ""){
            if(!is_dir("picture")){
                mkdir("picture");
            }
            copy($fileupload,"picture/".$fileupload_name);
            $sql = "INSERT INTO student (s_name,s_tel,fac_id,s_pic,s_card) VALUES ('$s_name','$s_tel','$fac_id','$fileupload_name','$s_card')";
        }else{
            $sql = "INSERT INTO student (s_name,s_tel,fac_id,s_card) VALUES ('$s_name','$s_tel','$fac_id','$s_card')";
        }
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
    }else{
        echo error_h3("ชื่อ - สกุล ซ้ำ","frm_addstd.php");
        return;
    }
}else{
    $msg = "";
    if(!$s_name) $msg .= " ชื่อ - สกุล";
    if(!$s_tel) $msg .= " เบอร์โทร";
    if(!$s_card) $msg .= "ID CARD";
    echo error_h3("กรุณาป้อน{$msg}","frm_addstd.php");
    return;
}
mysql_close();
echo success_h3("บันทึกข้อมูลเรียบร้อยแล้ว","showstudent.php");
?>
</body>
</html>