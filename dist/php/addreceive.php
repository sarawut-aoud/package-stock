<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include 'script2.php';
    include  'script.php';
    ?>

</head>
<body>
<?php
include "connect.php";
include "alert.php";
date_default_timezone_set('Asia/Bangkok');
$now = new DateTime();
$r_name = $_POST["r_name"];
$status = $_POST["status"];
$pa_id = $_POST["pa_id"];
$datenow2 = $now->format("Y-m-d H:i:s");

if($status != null){
        $sql = " UPDATE package SET r_name = '$r_name' , r_date  ='$datenow2' , status ='$status' WHERE pa_id = '$pa_id'";
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
}else{
    echo error_h3("กรุณาเลือกสถานะ","frm_receive.php");
    return;
}
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยแล้ว","showpack.php");
?>
</body>
</html>