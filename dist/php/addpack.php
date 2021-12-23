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
$pa_name = $_POST["pa_name"];
$fac_id = $_POST["fac_id"];
$pa_barcode =  $_POST["pa_barcode"];
$pa_sender = $_POST["pa_sender"];
$datenow = $now->format("Y-m-d H:i:s");

if($pa_name){
    $sql = "SELECT * FROM package WHERE pa_name = '$pa_name'";
    $result = mysql_query($sql,$conn);
    $total = mysql_num_rows($result);

    if($total == 0){
        $sql = "INSERT INTO package (pa_name,pa_barcode,pa_sender,pa_date,fac_id) VALUES('$pa_name','$pa_barcode','$pa_sender','$datenow','$fac_id')";
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
        mysql_close();
        echo success("บันทึกข้อมูลเรียบร้อยแล้ว","showpack.php");
    }else{
        echo error_h3("ชื่อซ้ำ");
    }
}else{
    echo error_h3("กรุณาป้อนชื่อ");
}
?>
</body>
</html>