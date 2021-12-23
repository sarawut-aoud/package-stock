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
    include 'check.php';
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
            <h1 class="mt-4">Add Faculty</h1>

            <!--viewdeatil-->

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" align="center" style="width: 100%; height: 100%;">
                            <tbody>
                            <tr>
                                <td align="center">
                                    <!--            Inner Table-->
                                    <div style="width: 80%; text-align: right; margin-top: 10px;">
                                        <a class="btn btn-warning" href="showfac.php" >
                                            <i class="fas fa-backspace"></i> Back
                                        </a>
                                        <h1></h1>
                                    </div>
                                    <form action="addfac.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                                        <table >
                                            <tr>
                                                <td align="center">
                                                    Add Faculty
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Faculty Name</span>
                                                        </div>
                                                        <input name="fac_name" id="fac_name" type="text" class="form-control"
                                                               placeholder="Faculty name"  aria-describedby="basic-addon1">
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
