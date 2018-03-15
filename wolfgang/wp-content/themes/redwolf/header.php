<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="description" content="<?php echo get_post_meta( $post->
ID, 'meta-description', true ); ?>" />
<title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') :
wp_title(); ?></title>
<base href="<?php echo get_bloginfo('url') ?>/">
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
<link rel="stylesheet" href="wp-content/themes/redwolf/css/normalize.css" />
<link rel="stylesheet" href="wp-content/themes/redwolf/css/font-awesome.min.css" />
<link rel="stylesheet" href="wp-content/themes/redwolf/style.css" />
<?php wp_head() ?>
</head>
<body>
  <header>
    <nav class="container">
      <a href="#" id="logo"><?php the_custom_logo(); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'menuhaut' ) ); ?>
    </nav>
  </header>
  <main class="container">
