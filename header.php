<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="page-wrapper">
		<header class="header">

			<!-- <div class="logo">
					<a href="<?= home_url(); ?>">
						<img src="/img/logo.png" alt="Logo">
					</a>
				</div> -->

			<!-- <nav role="navigation" class="nav main-nav">
					<?php wp_nav_menu(array(
						'theme_location'  => 'main'
					)); ?>
				</nav> -->
		</header>

		<main role="main">