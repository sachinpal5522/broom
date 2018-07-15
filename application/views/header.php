<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		echo link_tag('asset/css/bootstrap.min.css');
		echo link_tag('asset/js/bootstrap.min.js');
		echo link_tag('asset/js/jquery.min.js');?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <a class="navbar-brand" <?php echo anchor('home/index', 'E-Broom', array('title' => 'Homepage'));?></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
		  <li class="nav-item">
			<?php echo anchor('home/index', 'Home', array('title' => 'Homepage','class'=>'nav-link'));?>
		  </li>
		  <li class="nav-item">
			<?php echo anchor('home/location', 'Centers', array('title' => 'Location','class'=>'nav-link'));?>
		  </li>
		  <li class="nav-item">
			<?php echo anchor('home/info', 'Info', array('title' => 'Information','class'=>'nav-link'));?>
		  </li>
		 
		  	<?php echo anchor('home/login','Login',array('title'=> 'Log In','class'=>'nav-link'));?>
		      
		</ul>
	  </div>  
	</nav>
