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
            <h1 class="mt-4">Add Personal</h1>

            <!--viewdeatil-->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" align="center" style="width: 100%; height: 100%;">
                        <tbody>
                        <tr>
                            <td align="center">
                                <!--            Inner Table-->
                                <div style="width: 80%; text-align: right; margin-top: 10px;">
                                    <a class="btn btn-warning" href="showpersonal.php" >
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                    <h1></h1>
                                </div>
                                <form action="addpersonal.php" method="post" enctype="multipart/form-data" style="margin-top: 10px; margin-bottom: 10px;">

                                    <table style="width: 80 %">
                                        <tr>
                                            <td align="center">
                                                Add Personal
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Personal Name</span>
                                                    </div>
                                                    <input name="p_name" id="p_name" type="text" class="form-control"
                                                           placeholder="Personal name"  aria-describedby="basic-addon1">
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
                                                           placeholder="Telophone"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Picture</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="photo" name="photo"aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
                                                        <span class="input-group-text" id="basic-addon1">ID Card </span>
                                                    </div>
                                                    <input name="p_card" id="p_card" type="text" class="form-control"
                                                           placeholder="ID Card"  aria-describedby="basic-addon1">
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
    </main>
    <?php
    include 'footer.php';
    ?>


</body>
</html>
