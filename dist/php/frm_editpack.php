<?php
include 'connect.php';
include 'check.php';
$pa_id = $_GET["pa_id"];
$sql = "SELECT * FROM package where pa_id = '$pa_id'";
$result = mysql_query($sql, $conn)
or die("Can't Query") . mysql_error();
$rs = mysql_fetch_array($result);

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
    include 'script.php';
    ?>
</head>
<body class="sb-nav-fixed">

<?php
include 'menu_admin.php';
include 'layoutSide.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit Package</h1>

            <!--viewdeatil-->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" align="center" style="width: 100%; height: 100%;">
                        <tbody>
                        <tr>
                            <td align="center">
                                <!--            Inner Table-->
                                <div style="width: 80%; text-align: right; margin-top: 10px;">
                                    <a class="btn btn-warning" href="showpack.php" >
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                    <h1></h1>
                                </div>
                                <form action="editpack.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">
                                    <input hidden="pa_id" name="pa_id" value="<?php echo "$rs[pa_id];"?>">
                                    <table >
                                        <tr>
                                            <td align="center">
                                                Edit Package
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Barcode</span>
                                                    </div>
                                                    <input name="pa_barcode" id="pa_barcode" type="text" class="form-control"
                                                          value="<?php echo "$rs[pa_barcode]";?>" vplaceholder="Barcode name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Package Name</span>
                                                    </div>
                                                    <input name="pa_name" id="pa_name" type="text" class="form-control"
                                                           value="<?php echo "$rs[pa_name]";?>" placeholder="Package name"  aria-describedby="basic-addon1">
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
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Sender Name</span>
                                                    </div>
                                                    <input name="pa_sender" id="pa_sender" type="text" class="form-control"
                                                           value="<?php echo "$rs[pa_sender]";?>" placeholder="Package name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" align="center">
                                                <input class="btn btn-success" type="submit" value="Save" Q">
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
</div>
</main>
<?php
include 'footer.php';
?>
</div>
</div>

</body>
</html>
