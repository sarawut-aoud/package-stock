<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <?php
    include 'script.php';
    include 'script2.php';
    ?>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                            <div class="card-body">
                                <form action="login.php" method="post">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                                        <input class="form-control py-4" name="login" id="login" type="text" placeholder="Enter Username" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" />
                                    </div>
                                    <div>
                                        <td colspan="2">
                                            <div class="form-check">
                                                <input required class="form-check-input" value="1" type="radio" name="user_status" id="exampleRadios1"
                                                       value="option1">
                                                <label class="form-check-label" for="user_status">
                                                    ครูอาจารย์
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" value="0" type="radio" name="user_status" id="exampleRadios2"
                                                       value="option2">
                                                <label class="form-check-label" for="user_status">
                                                    ผู้ดูเเลระบบ
                                                </label>
                                            </div>
                                            <br>
                                            <div align="center">
                                                <button type="submit" class="btn btn-primary" > <i class="fas fa-share-square"></i> เข้าสู่ระบบ</button>
                                                <button type="reset" class="btn btn-secondary"> <i class="fas fa-ban"></i> ยกเลิก</button>
                                            </div>
                                            <br>
                                        </td>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <?php
        include 'footer.php';
        ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
