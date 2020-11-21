<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "script.php";
include  'script2.php';
include "connect.php";
include "alert.php";
date_default_timezone_set('Asia/Bangkok');
$now = new DateTime();
$pa_name = $_POST["pa_name"];
$pa_id = $_POST["pa_id"];
$fac_id = $_POST["fac_id"];
$pa_barcode =  $_POST["pa_barcode"];
$pa_sender = $_POST["pa_sender"];
$r_name = $_POST["r_name"];
$datenow = $now->format("Y-m-d H:i:s");

// check bank text
if($pa_name){
    // check diplicate primary key
    $sql = " SELECT * FROM package WHERE pa_name = '$pa_name' AND pa_id != '$pa_id' ";
    $total = mysql_query($sql,$conn);
    echo mysql_num_rows($total);

    if(mysql_num_rows($total) == 0){
        $sql = "UPDATE package SET pa_name = '$pa_name',pa_barcode = '$pa_barcode',pa_sender = '$pa_sender',pa_date = '$datenow',fac_id = '$fac_id',r_name = '$r_name' WHERE pa_id = '$pa_id'";
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
    }else{
        echo error_h3("ซ้ำ","showpack.php");
        return;
    }

}else{
    echo error_h3("กรุณาป้อนชื่อ","showpack.php");
    return;
}
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยแล้ว","showpack.php");
?>

</body>
</html>