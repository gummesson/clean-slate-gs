<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php get_site_name(); ?> | <?php get_page_clean_title(); ?></title>
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/style.css">
<?php get_header(); ?>
</head>
<body class="<?php get_page_slug(); ?>">
  <div class="container">
      <header class="site-header">
        <h1 class="site-logo">
          <a href="<?php get_site_url(); ?>" alt="<?php get_site_name(); ?>"><?php get_site_name(); ?></a>
        </h1><!-- /site-logo -->
        <?php get_component('tagline'); ?>
      </header><!-- /site-header -->
