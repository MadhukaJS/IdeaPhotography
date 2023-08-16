<?php include "../include/db.php";
session_start();?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>IdeaPhotography.lk</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <link href="assets/css/style.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
</head>
<body>

<div class="wrapper">
<!--    <?php include "customer_navigation.php"?>-->  
    <div class="main-panel">
		<nav class="navbar navbar-ct-black navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="">
                               <p>Account</p>
                            </a>
                        </li>                
                        <li>
                            <a href="./include/logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
					<ul class=".d-print collapse" id="navcol">
						<li>
							<a href="index.php">
								<p>Dashboard</p>
							</a>
						</li>
						<li>
							<a href="user.php">
								<p>My Profile</p>
							</a>
						</li>
						<li>
							<a href="albums.php">
								<p>My Albums</p>
							</a>
						</li>
						<li>
							<a href="orders.php">
								<p>My Orders </p>
							</a>
						</li>
						<li>
							<a href="support.php">
								<p>My Support Ticket</p>
							</a>
						</li>
						<li>
							<a href="./center/index.php">
								<p>My Reserverations</p>
							</a>
						</li>
					</ul>
                </div>
            </div>
        </nav>
	<div class="sidebar" data-color="black" data-image="assets/img/sidebar-1.jpg">
		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="../index.php" class="simple-text">IdeaPhotography.lk</a>
			</div>
			<ul class="nav">
				<li>
					<a href="index.php">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a href="user.php">
						<i class="pe-7s-user"></i>
						<p>My Profile</p>
					</a>
				</li>
				<li>
					<a href="albums.php">
						<i class="pe-7s-note2"></i>
						<p>My Albums</p>
					</a>
				</li>
				<li>
					<a href="orders.php">
						<i class="pe-7s-news-paper"></i>
						<p>My Orders </p>
					</a>
				</li>
				<li>
					<a href="support.php">
						<i class="pe-7s-science"></i>
						<p>My Support Ticket</p>
					</a>
				</li>
				<li>
					<a href="./center/index.php">
						<i class="pe-7s-news-paper"></i>
						<p>My Reserverations</p>
					</a>
				</li>
				<li>
					<a href="./include/logout.php">
						<i class="pe-7s-lock"></i>
						<p>Log out</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

