<?php

include 'connect.php';
$r_id = $_GET["r_id"];

$sql = "SELECT * FROM receive r, faculty f WHERE r.fac_id = f.fac_id AND r.r_id = '$r_id'";
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
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" onclick="window.history.back(-1)" style="color: white" >ระบบตรวจรับพัสดุ</a>
    <div class="collapse navbar-collapse  justify-content-end " >
    <form class="form-inline my-2 my-lg-0">
        <!--<button class="btn btn-outline-danger " href="logout.php"   ><i class="fas fa-sign-out-alt"></i> </button>-->
        <a class="btn btn-outline-danger" href="logout.php" role="button"><i class="fas fa-sign-out-alt"></i> </a>
    </form>
    </div>
</nav>
<?php

include 'layoutSide_user.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"> Detail Receive</h1>

            <!--viewdeatil-->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" align="center" style="width: 100%; height: 100%;">
                        <tbody>
                        <tr>
                            <td align="center">
                                <!--            Inner Table-->
                                <div style="width: 80%; text-align: right; margin-top: 10px;">
                                    <a class="btn btn-warning" onclick="window.history.back(-1)" >
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                    <h1></h1>
                                </div>
                                <form action="#" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                                    <table >
                                        <tr>
                                            <td align="center">
                                                Detail Receive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Receive Name</span>
                                                    </div>
                                                    <input name="r_name" id="r_name" type="text" class="form-control"
                                                          disabled value="<?php echo "$rs[r_name] ";?>" placeholder="Receive name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Faculty Name</span>
                                                    </div>
                                                    <input name="fac_name" id="fac_name" type="text" class="form-control"
                                                         disabled  value="<?php echo "$rs[fac_name] ";?>" placeholder="Faculty name"  aria-describedby="basic-addon1">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" align="center">
                                                <!--<input class="btn btn-success" type="submit" value="Save" Q">-->
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
