<?php
    include 'connect.php';
include 'check.php';
    $t_id = $_GET["t_id"];
    $sql = "SELECT * FROM teacher where t_id = '$t_id'";
    $result = mysql_query($sql,$conn)
    or die("Can't Query").mysql_error();
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
    include  'script.php';
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
            <h1 class="mt-4">Edit Teacher</h1>

            <!--viewdeatil-->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" align="center" style="width: 100%; height: 100%;">
                        <tbody>
                        <tr>
                            <td align="center">
                                <!--            Inner Table-->
                                <div style="width: 80%; text-align: right; margin-top: 10px;">
                                    <a class="btn btn-warning" href="showteacher.php" >
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                    <h1></h1>
                                </div>
                                <form action="editteacher.php" method="post" enctype="multipart/form-data" style="margin-top: 10px; margin-bottom: 10px;">
                                    <input hidden="t_id" name="t_id" value="<?php echo "$rs[t_id];"?>">
                                    <input hidden="t_pic" name="t_pic" value="<?php echo "$rs[t_pic];"?>">
                                    <table style="width: 80 %">
                                        <tr>
                                            <td align="center">
                                                Edit Teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Teacher Name</span>
                                                    </div>
                                                    <input name="t_name" id="t_name" type="text" class="form-control"
                                                           placeholder="Teacher name"  aria-describedby="basic-addon1"
                                                           value="<?php echo "$rs[t_name]";?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Tel. </span>
                                                    </div>
                                                    <input name="t_tel" id="t_tel" type="text" class="form-control"
                                                           placeholder="Telophone"  aria-describedby="basic-addon1"
                                                           value="<?php echo "$rs[t_tel]";?>">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" >
                                                <?php

                                                if("$rs[t_pic]" !=""){
                                                    ?>
                                                    <div style="text-align: center">
                                                        <img   src="<?php echo"picture/$rs[t_pic]";?>" width="50%"  height="10%">
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
