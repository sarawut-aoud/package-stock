<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<?php
include "connect.php";
include "script.php";
include  'script2.php';
include "alert.php";
$t_id = $_GET['t_id'];
$sql = "SELECT * FROM teacher WHERE t_id = '$t_id'";
$result = mysql_query($sql,$conn);
$rs = mysql_fetch_array($result);
if("$rs[t_pic]" != ""){ @unlink("picture/$rs[t_pic]"); }
$sql = "DELETE FROM teacher WHERE t_id = '$t_id'";
mysql_query($sql,$conn)
or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("ลบข้อมูลเรียบร้อยเเล้ว","showteacher.php");
?>
</body>
</html>