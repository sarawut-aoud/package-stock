<?php
    include 'connect.php';
include 'check.php';
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
            <h1 class="mt-4">Add Package</h1>

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
                                <form action="addpack.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                                    <table >
                                        <tr>
                                            <td align="center">
                                                Add Package
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Barcode</span>
                                                    </div>
                                                    <input name="pa_barcode" id="pa_barcode" type="text" class="form-control"
                                                           placeholder="Barcode name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"> Name</span>
                                                    </div>
                                                    <input name="pa_name" id="pa_name" type="text" class="form-control"
                                                           placeholder="Name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Faculty </span>
                                                    </div>
                                                    <select class="custom-select" name="fac_id" id="fac_id" >
                                                        <?php
                                                        $sql1 = "SELECT * from faculty ";
                                                        $result1 = mysql_query($sql1,$conn);
                                                        while ($rs1=mysql_fetch_array($result1)){
                                                            echo "<option value = $rs1[fac_id]>$rs1[fac_name]</option>";
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
                                                       placeholder="Package name"  aria-describedby="basic-addon1">
                                            </div>
                                        </td>
                                        </tr>
                                        <!--<tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Receive Name</span>
                                                    </div>
                                                    <input name="r_name" id="r_name" type="text" class="form-control"
                                                           placeholder="Receive name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>-->
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
</div>
</main>
<?php
include 'footer.php';
?>
</div>
</div>

</body>
</html>
