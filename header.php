<?php
    require_once("admins/db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Banjul City Council | Tax Collectiong System</title>
        <meta name="viewport" content="user-scalable=no, width=device-width" />
        <link rel="icon" href="logo.png" sizes="16x16" type="image/png"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"  />
		<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <style>
            .nav-link{
                color:#fff;
                font-weight:bolder;
            }
        </style>
    </head>
    <body>
        <header id="main_header" class="container-fluid">
            <section class="row">
                <div class="col">
    <img border="0" alt="W3Schools" src="logo.png" width="70" height="70"><h3>Banjul City Council | Tax Collectiong System</h3>
                </div>
            </section>
                <nav class="navbar navbar-expand-md bg-success">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
                        <!-- <li class="nav-item"><a href="#" class="nav-link">Blog</a></li> -->
                        <li class="nav-item"><a href="about_us.php" class="nav-link">MARKET PLACE</a></li>
                        <li class="nav-item"><a href="contact_us.php" class="nav-link">CONTACT US</a></li>
                        <li class="nav-item"><a href="admins/login.php" class="nav-link" target="_blank">ADMIN</a></li>
                    </ul>
                </nav>
        </header>