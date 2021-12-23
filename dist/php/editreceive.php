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
$r_id = $_POST["r_id"];
$fac_id = $_POST["fac_id"];
$r_tel =  $_POST["r_tel"];

$r_name = $_POST["r_name"];
$datenow = $now->format("Y-m-d H:i:s");

// check bank text
if($r_name){
    // check diplicate primary key
    $sql = " SELECT * FROM receive WHERE r_name = '$r_name' AND r_id != '$r_id' ";
    $total = mysql_query($sql,$conn);
    echo mysql_num_rows($total);

    if(mysql_num_rows($total) == 0){
        $sql = "UPDATE receive SET r_name = '$r_name',r_tel = '$r_tel',r_date = '$datenow',fac_id = '$fac_id'WHERE r_id = '$r_id'";
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
    }else{
        echo error_h3("ซ้ำ","frm_receive.php");
        return;
    }

}else{
    echo error_h3("กรุณาป้อนชื่อ","frm_receive.php");
    return;
}
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยแล้ว","showpack.php");
?>

</body>
</html>