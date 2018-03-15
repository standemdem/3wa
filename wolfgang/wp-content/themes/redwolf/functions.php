<?php
register_nav_menus( array(
'menuhaut'
=> __( 'Menu haut', 'redwolf' )
) );
function themeredwolf_widgets_init() {
register_sidebar( array(
'name'
=> __( 'accueil', 'redwolf' ),
'id'
=> 'accueil',
'description' => __( 'Zone de widget Accueil', 'redwolf' ),
'before_widget' => '<section class="media">',
'after_widget' => '</section>',
) );
register_sidebar( array(
'name'
=> __( 'footer', 'redwolf' ),
'id'
=> 'footer',
'description' => __( 'Zone de widget texte pied de page', 'redwolf' ),
'before_widget' => '',
'after_widget' => '',) );
register_sidebar( array(
'name'
=> __( 'menubas', 'redwolf' ),
'id'
=> 'menubas',
'description' => __( 'Zone de widget Menu bas', 'redwolf' ),
'before_widget' => '',
'after_widget' => '',
) );
register_sidebar( array(
'name'
=> __( 'copyright', 'redwolf' ),
'id'
=> 'copyright',
'description' => __( 'Zone de widget Copyright', 'redwolf' ),
'before_widget' => '<small id="licence">',
'after_widget' => '</small>',
) );
}
 add_action( 'widgets_init', 'themeredwolf_widgets_init' );
add_theme_support('custom-logo');


?>
