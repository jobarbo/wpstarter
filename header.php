<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		history.scrollRestoration = "manual"
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('modules/md-preloader'); ?>

	<div class="cursor" data-cursor-container>
		<div class="cursor__ball cursor__ball--small" data-cursor-pointer>
			<svg height="32" width="32">
				<circle cx="15" cy="16" r="4" stroke-width="0"></circle>
			</svg>
		</div>
		<div class="cursor__ball cursor__ball--big" data-cursor-pointer>
			<svg>
				<circle cx="50" cy="50" r="40" stroke-width="0"></circle>
			</svg>
		</div>
		<div class="cursor__text" data-cursor-pointer>
			<p>Coucou</p>
		</div>
		<div class="cursor__image" data-cursor-pointer>
			<div>
				<img src="https://media2.giphy.com/media/WS3i2y88foYpE584rI/giphy.gif" alt="Hello">
			</div>
		</div>
	</div>

	<header class="header"></header>
	<div class="page-wrapper">
		<main role="main">