<?php get_header(); ?>
  <h1><?php bloginfo('description') ?></h1>
  <section class="slider">
    <?php wd_slider(2); ?>
  </section>
  <h2><?php echo category_description(2); ?></h2>
  <section class="work">
  <?php query_posts('posts_per_page=4&cat=2'); if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article>
  <?php echo the_post_thumbnail('thumbnail'); ?>
  <h3><?php the_title(); ?></h3>
  <?php the_excerpt(); ?><a href="<?php echo get_permalink( $post->ID ); ?>">En savoir plus</a>
  </article>
  <?php endwhile; ?>
  <?php endif; ?>
  </section>
  <?php dynamic_sidebar( 'accueil' ); ?>
<?php get_footer(); ?>
