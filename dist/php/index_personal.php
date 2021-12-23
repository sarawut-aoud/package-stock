<?php

include 'connect.php';


$sql = "SELECT * FROM receive_detail rd , package pa , receive r ,faculty f
        WHERE pa.pa_id = rd.pa_id AND r.r_id = rd.r_id AND pa.fac_id = f.fac_id  ";
$result = mysql_query($sql,$conn)
or die ("Can't Query ! ").mysql_error();

$sql2 = "SELECT * FROM receive_detail rd , receive r 
            WHERE  r.r_id = rd.r_id ";
$result2 =mysql_query($sql2,$conn)
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
include 'menu_per.php';
include 'layoutSide_stp.php';
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
                                while (($rs = mysql_fetch_object($result)) AND ($rs2=mysql_fetch_object($result2)) ) {
                                    ?>

                                    <tr>
                                        <td align="center"><?php echo"$rs->pa_id";?></td>
                                        <td align="center"><?php echo"$rs->pa_barcode";?></td>
                                        <td align="center"><?php echo"$rs->pa_name";?></td>
                                        <td align="center"><?php echo"$rs->fac_name";?></td>
                                        <td align="center"><?php echo"$rs->pa_sender";?></td>
                                        <td align="center"><?php echo"$rs->pa_date";?></td>
                                        <td align="center">
                                            <a href="frm_receivedetail.php?r_id=<?php echo $rs->r_id ;?>">
                                                <?php echo"$rs->r_name";?>
                                            </a>
                                        </td>
                                        <td align="center"><?php echo"$rs->r_date";?></td>
                                        <td align="center"><?php

                                            if ($rs2->status == 2) {
                                                echo "<span class='badge badge-pill badge-danger'> ยังไม่ได้รับพัสดุ </span>";
                                            } elseif ($rs2->status == 1) {
                                                echo "<span class='badge badge-pill badge-success'> รับพัสดุแล้ว </span>";
                                            }
                                            ?>
                                        </td>
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
