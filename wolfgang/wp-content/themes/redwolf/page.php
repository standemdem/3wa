<?php get_header(); ?>
<article>
  <h1><?php the_title(); ?></h1>
  <?php echo get_post_field('post_content', $post->ID); ?>
</article>
<?php get_footer(); ?>
