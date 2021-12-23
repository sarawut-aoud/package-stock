<?php

if(isset($_SESSION["valid_uname"]) && isset($_SESSION["valid_pwd"])){
	include "connect.php";

}

?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index_admin.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                        ระบบตรวจรับพัสดุ
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="showpack.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-box-open"></i></div>
                        Package
                    </a>
                    <a class="nav-link" href="receivedetail.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-hand-holding"></i></div>
                        Receive
                    </a>
                    <a class="nav-link" href="showpersonal.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                        Personal
                    </a>
                    <a class="nav-link" href="showteacher.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        Teacher
                    </a>
                    <a class="nav-link" href="showstudent.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                         Student
                    </a>
                    <a class="nav-link" href="showfac.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                        Faculty
                    </a>



                </div>
            </div>
            <div class="sb-sidenav-footer">

                <div class="small">Logged in as: <?php  echo "$_SESSION[valid_uname]" ?> </div>
                <!-- echo คนเข้าสู่ระบบ -->
            </div>
        </nav>
    </div>