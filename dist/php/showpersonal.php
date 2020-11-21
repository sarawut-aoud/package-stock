<?php
include 'connect.php';
include 'check.php';
$sql = "SELECT * FROM personal p,faculty f where p.fac_id = f.fac_id ";
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
            <h1 class="mt-4">Manage Personal</h1>

            <!--viewdeatil-->
            <!-- --><?php
            /*            include 'viewdetail.php';
                        */?>
            <!--ADD-->
            <div class="card mb-4">
                <div class="card-header ">
                    <nav class="navbar navbar-light bg-light">
                        <a class="avbar-brand">
                            <i class="fas fa-table mr-1"></i> DataTable Personal </a>
                        <div style=" width: 80%;height:10%;text-align: right">
                            <a  class="btn btn-success" href="frm_addper.php"  >
                                <i class="fas fa-plus-square"></i> Add
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <!--ADD-->

            <table   align="center"   style="width: 100%; height: 150px">
                <tbody>

                <tr >
                    <td align="center"  >
                        <!--            Inner Table-->
                        <div align="center" style="width: 80%">
                            <table class="table table-hover" id="example" width="100%"  style="margin-top: 10px; margin-bottom: 10px">
                                <thead align="center">
                                <tr>
                                    <th width="10%">No</th>
                                    <th width="20%">Name</th>
                                    <th width="25%">Faculty</th>
                                    <th width="15%"></th>
                                    <!--<th width="25%"></th>-->
                                </tr>
                                </thead>
                                <tfoot align="center">
                                <tr>
                                    <th width="10%">No</th>
                                    <th width="20%">Name</th>
                                    <th width="25%">Faculty</th>
                                    <th width="15%"></th>
                                    <!--<th width="25%"></th>-->
                                </tr>
                                </tfoot>
                                <tbody>

                                <?php
                                while ($rs = mysql_fetch_object($result)) {
                                    ?>
                                    <tr>
                                        <td align="center"><?php echo"$rs->p_id";?></td>
                                        <td align="center"><?php echo"$rs->p_name";?></td>
                                        <td align="center"><?php echo"$rs->fac_name";?></td>
                                        <td align="center">
                                            <a class="btn btn-warning"  href="frm_editper.php?p_id=<?php echo $rs->p_id;?>">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>
                                            <a class="btn btn-danger" onclick="deleteLocation(<?php echo $rs ->p_id ;?>)" style="color: white">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                        </td>
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


    function deleteLocation(p_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "deleteper.php?t_id="+p_id;
            }
        })
    };
</script>
</body>
</html>
