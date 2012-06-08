<!doctype html>
<html>
<head>
<title><?php wp_title("::", "true", "right");?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/style.css">

<? wp_head();?>

</head>
<body>
<div class="container">
	<div id="header">
		<h1 class="blog-title"><a href="/"><?php bloginfo('name');?></a></h1>
		<div id="site-description"><?php bloginfo('description');?></div>
		<div>
			<ul>
				<li><a href="/">Home</a></li>
				<li ><a href="/about/">About</a></li>
			</ul>
		</div>
	</div>
	<div class="row">