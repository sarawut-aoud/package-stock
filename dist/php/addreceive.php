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
$r_tel = $_POST["r_tel"];
$fac_id =$_POST["fac_id"];
$datenow2 = $now->format("Y-m-d H:i:s");

if($r_name and $r_tel){
    $sql = "SELECT * FROM receive WHERE r_name = '$r_name' AND r_tel='$r_tel'";
    $result = mysql_query($sql,$conn);
    $total = mysql_num_rows($result);

    if($total == 0){
        $sql = "INSERT INTO receive (r_name,r_tel,fac_id) VALUES('$r_name','$r_tel','$fac_id')";
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
        mysql_close();
        echo success("บันทึกข้อมูลเรียบร้อยแล้ว","showpack.php");
    }else{
        echo error_h3("ชื่อซ้ำ");
    }
}else{
    echo error_h3("กรุณาป้อนข้อมูล");
}
?>
</body>
</html>