<?php
register_nav_menus( array(
'menuhaut'
=> __( 'Menu haut', 'mindgeek' )
) );
function thememindgeek_widgets_init() {
register_sidebar( array(
'name'
=> __( 'accueil', 'mindgeek' ),
'id'
=> 'accueil',
'description' => __( 'Zone de widget Accueil', 'mindgeek' ),
'before_widget' => '<section class="media">',
'after_widget' => '</section>',
) );
register_sidebar( array(
  'name'
  =>__('recherche', 'mindgeek'),
  'id'
  => 'recherche',
  'description' =>__('Zone de widget Recherche', 'mindgeek' ),
  'before_widget' => '</section>',
  'after_widget' => '</header>',
));
register_sidebar( array(
'name'
=> __( 'menubas', 'mindgeek' ),
'id'
=> 'menubas',
'description' => __( 'Zone de widget Menu bas', 'mindgeek' ),
'before_widget' => '',
'after_widget' => '',
) );
register_sidebar( array(
'name'
=> __( 'copyright', 'mindgeek' ),
'id'
=> 'copyright',
'description' => __( 'Zone de widget Copyright', 'mindgeek' ),
'before_widget' => '<small id="licence">',
'after_widget' => '</small>',
) );
}
 add_action( 'widgets_init', 'thememindgeek_widgets_init' );
add_theme_support('custom-logo');


?>
