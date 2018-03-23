<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?></title>
<base href="<?php echo get_bloginfo('url') ?>/">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Dosis|Open+Sans">
<link rel="stylesheet" href="wp-content/themes/mindgeek/css/normalize.css" />
<link rel="stylesheet" href="wp-content/themes/mindgeek/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
<?php wp_head() ?>
</head>
<body>
<header>
  <nav>
    <a href="#" id="logo"><?php the_custom_logo(); ?></a>
    <?php wp_nav_menu( array( 'theme_location' => 'menuhaut' ) ); ?>
  </nav>
  <?php if(is_front_page()): ?>
    <section id="tagline">
  			<h1>L'hébergement à prix libre</h1>
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  	</section>
  <?php endif ?>


  <?php dynamic_sidebar( 'recherche' ); ?>
</header>
