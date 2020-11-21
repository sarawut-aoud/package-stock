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

$fac_name = $_POST["fac_name"];


if($fac_name){
    $sql = "SELECT * FROM faculty WHERE fac_name = '$fac_name'";
    $result = mysql_query($sql,$conn);
    $total = mysql_num_rows($result);

    if($total == 0){
        $sql = "INSERT INTO faculty (fac_name) VALUES('$fac_name')";
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
        mysql_close();
        echo success("บันทึกข้อมูลเรียบร้อยแล้ว","showfac.php");
    }else{
        echo error_h3("ชื่อคณะซ้ำ");
    }
}else{
    echo error_h3("กรุณาป้อนชื่อคณะ");
}
?>
</body>
</html>