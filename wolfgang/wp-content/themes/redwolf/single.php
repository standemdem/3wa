<?php get_header(); ?>
  <article>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <div class="left"><?php echo the_post_thumbnail('large'); ?></div>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php endif; ?>
  </article>
<?php get_footer(); ?>
