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
$pa_id = $_POST["pa_id"];
$r_id =$_POST["r_id"];
$status =$_POST["status"];
$datenow2 = $now->format("Y-m-d H:i:s");

if($status != null) {
    $sql = "UPDATE  receive_detail SET r_id = '$r_id',status ='$status',r_date ='$datenow2' WHERE pa_id='$pa_id'";
    mysql_query($sql, $conn)
    or die("3. ไม่สามารถประมวลผลคำสั่งได้") . mysql_error();
    mysql_close();
    echo success("บันทึกข้อมูลเรียบร้อยแล้ว", "receivedetail.php");
}else{
    echo error_h3("กรุณาป้อนข้อมูล");
}

?>
</body>
</html>