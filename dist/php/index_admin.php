<?php
ob_start();
include 'connect.php';

$pa_id = $_GET["pa_id"];
$sql = "SELECT * FROM package pa,faculty f
        WHERE pa.fac_id = f.fac_id  ";
$result = mysql_query($sql,$conn)
or die ("Can't Query ! ").mysql_error();

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
    include 'check.php';
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
            <h1 class="mt-4">ระบบตรวจรับพัสดุ </h1>


            <!--ADD-->

            <!--ADD-->

            <table   align="center"   style="width: 100%; height: 150px;margin-top: 20px">
                <tbody>

                <tr >
                    <td align="center"  >
                        <!--            Inner Table-->
                        <div align="center" style="width: 100%">
                            <table class="table table-hover" id="example" width="100%"  style="margin-top: 10px; margin-bottom: 10px">
                                <thead align="center">
                                <tr>
                                    <th width="2%">No</th>
                                    <th width="10%">Barcode</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Faculty</th>
                                    <th width="10%">Name sender</th>
                                    <th width="10%">Date sender</th>
                                    <th width="10%">Receive</th>
                                    <th width="10%">Date Receive</th>
                                    <th width="5%">Status</th>

                                </tr>
                                </thead>
                                <tfoot align="center">
                                <tr>
                                    <th width="2%">No</th>
                                    <th width="10%">Barcode</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Faculty</th>
                                    <th width="10%">Name sender</th>
                                    <th width="10%">Date sender</th>
                                    <th width="10%">Receive</th>
                                    <th width="10%">Date Receive</th>
                                    <th width="5%">Status</th>

                                </tr>
                                </tfoot>
                                <tbody>

                                <?php
                                while ($rs = mysql_fetch_object($result)) {
                                    ?>
                                    <tr>
                                        <td align="center"><?php echo"$rs->pa_id";?></td>
                                        <td align="center"><?php echo"$rs->pa_barcode";?></td>
                                        <td align="center"><?php echo"$rs->pa_name";?></td>
                                        <td align="center"><?php echo"$rs->fac_name";?></td>
                                        <td align="center"><?php echo"$rs->pa_sender";?></td>
                                        <td align="center"><?php echo"$rs->pa_date";?></td>
                                        <td align="center"><?php echo"$rs->r_name";?></td>
                                        <td align="center"><?php echo"$rs->r_date";?></td>
                                        <td align="center"><?php echo"$rs->status";?></td>
                                        <!--<td align="center">
                                            <a class="btn btn-warning"  href="frm_editper.php?p_id=<?php /*echo $rs->p_id;*/?>">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>
                                            <a class="btn btn-danger" onclick="deleteLocation(<?php /*echo $rs ->p_id ;*/?>)" style="color: white">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                        </td>-->
                                    </tr>


                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                        <!--            Inner Table-->
                    </td>
                </tr>

                </tbody>

            </table>


        </div>

    </main>
    <?php
    include 'footer.php';
    ?>
</div>
<script>
    $(document).ready(function() {
        $('#example').dataTable();
    } );

</script>
</body>
</html>
