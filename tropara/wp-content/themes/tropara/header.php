<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title')?></title>
	<?php //function pagecss() { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/stylesheets/css/bootstrap.min.css">
	<?php //wp_head()?>
	<?php //} add_filter('wp_head', 'pagecss()'); ?>
</head>
<!-- <nav>
	<header>
		<a href="<?php home_url('/')?>"><div class="logo">
		 <?php //bloginfo('name')?>
		</div> </a>		
			<div id="fish"></div>
			<div id="headbtn"></div>

		<div class="container">
			<ul>
				<li class="logo"><a href="<?php home_url('/')?>" title="<?php bloginfo('name')?>"></a> </li>
				<li id="fish"><a href="#" title="<?php bloginfo('name')?>"></a> </li>
				<li id="headbtn"><a href="#" title="<?php bloginfo('name')?>"></a> </li>
			</ul>
		</div>			
	</header>
	<?php //wp_nav_menu(); ?>
</nav>
 -->
 <!-- Static navbar -->
    <nav class="navbar navbar-tropara navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="col-sm-3"></div>
          <a href="<?php home_url('/')?>"><span id="upper-brand">Lorem Ipsum Villa Tropical Paradise</span></a>
          <a class="navbar-brand" href="<?php home_url('/')?>" title="<?php bloginfo('name')?>"></a><!-- Logo name -->
        </div>
	      <!--  <div class="nav navbar-nav navbar-right">
	      		<a class="fish" href="#"></a>
	      		<a class="bntarrowhead" href="#"></a>
	      </div> -->
        <div id="navbar" >
           <ul class="nav navbar-nav">
            <li class="fish"></li>
          </ul>
          <div class="nav navbar-nav navbar-right">
            <a class="bntarrowhead" href="#"></a>
          </div>
        </div> <!--/.nav-collapse -->
      </div>
    </nav>


      <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      	<div class="col-sm-1"></div>		
      	<div class="col-sm-10 well">
      
      



