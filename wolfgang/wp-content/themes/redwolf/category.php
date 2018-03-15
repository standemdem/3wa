<?php get_header(); ?>
<h2><?php echo category_description(); ?></h2>
<section class="work">
  <?php
  if ( have_posts() ) : ?>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <article>
    <?php echo the_post_thumbnail('thumbnail'); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?><a href="<?php echo get_permalink( $post->ID ); ?>">En savoir plus</a>
  </article>
  <?php endwhile;
  else: ?>Articles prochainement
  <?php endif; ?>
</section>
<?php get_footer(); ?>
