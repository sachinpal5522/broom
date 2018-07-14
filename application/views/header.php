<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		echo link_tag('asset/css/bootstrap.min.css');
		echo link_tag('asset/js/bootstrap.min.js');
		echo link_tag('asset/js/jquery.min.js');
	?>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <a class="navbar-brand" href="#">E-BROOM</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
		  <li class="nav-item">
			
			<?php echo anchor('home', 'HOME', array('title' => 'The best news!','class'=>'nav-link'));?>
		  </li>
		  <li class="nav-item">
			<?php echo anchor('home', 'CENTERS', array('title' => 'The best news!','class'=>'nav-link'));?>
		  </li>
		  <li class="nav-item">
			<?php echo anchor('home', 'INFO', array('title' => 'The best news!','class'=>'nav-link'));?>
		  </li>    
		</ul>
	  </div>  
	</nav>
