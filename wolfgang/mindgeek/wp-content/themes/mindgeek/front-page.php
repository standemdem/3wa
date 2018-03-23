<?php get_header(); ?>
<main class=" container">
<?php echo get_post_field('post_content', $post->ID); ?>
</main>
  <?php dynamic_sidebar( 'accueil' ); ?>
<?php get_footer(); ?>
