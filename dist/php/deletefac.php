<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
   <?php
   include 'script.php';
   include  'script2.php';
   ?>
</head>

<body>
<?php
include "connect.php";
include "alert.php";
$fac_id = $_GET['fac_id'];
$sql = "DELETE FROM faculty WHERE fac_id = '$fac_id'";
mysql_query($sql,$conn)
or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("ลบข้อมูลเรียบร้อยแล้ว","showfac.php")
?>
</body>
</html>