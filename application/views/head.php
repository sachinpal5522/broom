<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
	<?php
		echo link_tag('asset/vendor/bootstrap/css/bootstrap.min.css');
		echo link_tag('asset/vendor/fontawesome-free/css/all.min.css');
		echo link_tag('asset/vendor/datatables/dataTables.bootstrap4.css');
		echo link_tag('asset/css/sb-admin.css');
	?>
    
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo site_url('home/index') ?>">E-Disposer</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      </div>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?=site_url('login/userWaste')?>">My Uploads</a>
            <a class="dropdown-item" href="<?=site_url('home/addwaste')?>">Add Waste</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('home/index') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Information</span></a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('home/center') ?>">
            <i class="fas fa-fw fa-map"></i>
            <span>Centers</span></a>
        </li>
		
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-comment"></i>
            <span>About us</span></a>
        </li>
		
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">