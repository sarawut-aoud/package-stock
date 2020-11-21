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
$p_id = $_GET['p_id'];
$sql = "SELECT * FROM personal WHERE p_id = '$p_id'";
$result = mysql_query($sql,$conn);
$rs = mysql_fetch_array($result);
if("$rs[p_pic]" != ""){ @unlink("picture/$rs[p_pic]"); }
$sql = "DELETE FROM personal WHERE p_id = '$p_id'";
mysql_query($sql,$conn)
or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("ลบข้อมูลเรียบร้อยเเล้ว","showpersonal.php");
?>
</body>
</html>