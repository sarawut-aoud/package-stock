<?php
include 'connect.php';
include 'check.php';

$valid_uname = $_SESSION["valid_uname"];
$sql = "SELECT * FROM personal WHERE p_card = '$valid_uname'";
$result = mysql_query($sql, $conn)
or die("3. ไม่สามารถประมวลผลคำสั่งได้") . mysql_error();
$rs = mysql_fetch_array($result);
mysql_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ระบบตรวจรับพัสดุ</title>
    <?php
    include 'script2.php';
    include  'script.php';
    ?>
</head>
<body class="sb-nav-fixed">

<?php
include 'menu_per.php';
include 'layoutSide_stp.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit Personal</h1>

            <!--viewdeatil-->

            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-bordered" align="center" style="width: 100%; height: 100%;">
                        <tbody>
                        <tr>
                            <td align="center">
                                <!--            Inner Table-->
                                <div style="width: 80%; text-align: right; margin-top: 10px;">
                                    <a class="btn btn-warning" href="index_personal.php" >
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                    <h1></h1>
                                </div>
                                <form action="setper.php" method="post" enctype="multipart/form-data" style="margin-top: 10px; margin-bottom: 10px;">
                                    <input hidden="p_id" name="p_id" value="<?php echo "$rs[p_id];"?>">
                                    <input hidden="p_pic" name="p_pic" value="<?php echo "$rs[p_pic];"?>">
                                    <table style="width: 80 %">
                                        <tr>
                                            <td align="center">
                                                Edit Personal
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Personal Name</span>
                                                    </div>
                                                    <input name="p_name" id="p_name" type="text" class="form-control"
                                                           placeholder="Personal name"  aria-describedby="basic-addon1"
                                                           value="<?php echo "$rs[p_name]";?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Tel. </span>
                                                    </div>
                                                    <input name="p_tel" id="p_tel" type="text" class="form-control"
                                                           placeholder="Telophone"  aria-describedby="basic-addon1"
                                                           value="<?php echo "$rs[p_tel]";?>">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" >
                                                <?php

                                                if("$rs[p_pic]" !=""){
                                                    ?>
                                                    <div style="text-align: center">
                                                        <img   src="<?php echo"picture/$rs[p_pic]";?>" width="50%"  height="10%">
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <div class="input-group mb- " style="margin-top: 20px">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Picture</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input  type="file" class="custom-file-input" id="photo" name="photo"aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>

                                                </div>
                </div>
                </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Faculty </span>
                            </div>
                            <select  class="custom-select" name="fac_id" id="fac_id" >
                                <?php
                                $sql2 = "SELECT * from faculty ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[fac_id]\" ";
                                    if ("$rs[fac_id]"=="$rs2[fac_id]") {echo'selected';}
                                    echo ">$rs2[fac_name]";
                                    echo "</option>\n";
                                }
                                ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">ID Card </span>
                            </div>
                            <input name="p_card" id="p_card" type="text" class="form-control"
                                   disabled value="<?php echo "$rs[p_card]"?>" placeholder="ID Card"  aria-describedby="basic-addon1">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input class="btn btn-success" type="submit" value="Save" >
                        <!--<input class="btn btn-danger" type="reset" value="Cancel">-->
                    </td>
                </tr>
                </table>

                </form>
                <!--            Inner Table-->
                </td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
</div>
</main>
<?php
include 'footer.php';
?>


</body>
</html>
