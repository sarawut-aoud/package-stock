<?php

session_start();
unset($_SESSION["valid_uname"]);
unset($_SESSION["valid_pwd"]);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php
    include 'script.php';
    include  'script2.php';
    ?>
</head>
<body>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Logout...',
        text: 'You loguot successful',
        showCancelButton: true,
        showConfirmButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "index.php";
        }else {
            window.history.back(-1);
        }
    })

</script>
</body>
</html>
<?php
session_destroy();