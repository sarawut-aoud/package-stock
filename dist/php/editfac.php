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

$fac_name = $_POST["fac_name"];
$fac_id = $_POST["fac_id"];
// check bank text
if($fac_name){
    // check diplicate primary key
    $sql = " SELECT * FROM faculty WHERE fac_name = '$fac_name' AND fac_id != '$fac_id' ";
    $total = mysql_query($sql,$conn);
    echo mysql_num_rows($total);

    if(mysql_num_rows($total) == 0){
        $sql = "UPDATE faculty SET fac_name = '$fac_name' WHERE fac_id = '$fac_id'";
        mysql_query($sql,$conn)
        or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
    }else{
        echo error_h3("ชื่อคณะซ้ำ","showfac.php");
        return;
    }

}else{
    echo error_h3("กรุณาป้อนชื่อคณะ","showfac.php");
    return;
}
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยแล้ว","showfac.php");
?>

</body>
</html>