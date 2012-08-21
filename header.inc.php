<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
 	<title><?php get_site_name(); ?> | <?php get_page_clean_title(); ?></title>
	<link href="<?php get_theme_url(); ?>/assets/css/base.css" rel="stylesheet" type="text/css">
<?php get_header(); ?>
</head>
<body class="<?php get_page_slug(); ?>" >
	<div class="container">
			<header class="branding">
				<h1><a href="<?php get_site_url(); ?>" alt="<?php get_site_name(); ?>" title="<?php get_site_name(); ?>"><?php get_site_name(); ?></a></h1>
					<p><?php get_component('tagline'); ?></p>
			</header><!-- header .branding -->