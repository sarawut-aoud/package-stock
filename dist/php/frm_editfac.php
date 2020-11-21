<?php
    include 'connect.php';
    $fac_id = $_GET["fac_id"];

    $sql = "SELECT * FROM faculty WHERE fac_id = '$fac_id'";
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
            <h1 class="mt-4">Edit Faculty</h1>

            <!--viewdeatil-->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" align="center" style="width: 100%; height: 100%;">
                        <tbody>
                        <tr>
                            <td align="center">
                                <!--Inner Table-->
                                <div style="width: 80%; text-align: right; margin-top: 10px;">
                                    <a class="btn btn-warning" href="showfac.php" >
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                    <h1></h1>
                                </div>
                                <form action="editfac.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                                    <table >
                                        <tr>
                                            <td align="center">
                                                Edit Faculty
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Faculty Name</span>
                                                    </div>
                                                    <input name="fac_name" id="fac_name" type="text" class="form-control"
                                                          value="<?php echo "$rs[fac_name]" ;?>" placeholder="Faculty name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" align="center">
                                                <input class="btn btn-success" type="submit" value="Save" onclick="window.history = 'editfac.php'" ">
                                                <!--<input class="btn btn-danger" type="reset" value="Cancel">-->
                                            </td>
                                        </tr>
                                    </table>
                                    <input name="fac_id" type="hidden" id="fac_id" value="<?php echo "$rs[fac_id]";?>" >
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
