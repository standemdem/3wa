<?php get_header(); ?>
<main class="dedie container">
<h2><?php single_cat_title(); ?></h2>
<?php echo category_description(); ?>
<section class="flex">
  <?php
  if ( have_posts() ) : ?>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <article class="host">
    <?php echo the_post_thumbnail('thumbnail'); ?>
    <h3 class="option"><?php the_title(); ?></h3>
    <?php the_content("Commander"); ?>
  </article>
  <?php endwhile;
  else: ?>Articles prochainement
  <?php endif; ?>
</section>
<?php get_footer(); ?>
