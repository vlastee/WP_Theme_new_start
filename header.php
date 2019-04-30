<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html>
    
    <head>

        <?php wp_head();?>
    
    </head>

<body <?php body_class();?>>


<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

<a class="skip-link sr-only sr-only-focusable " href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

<nav class="navbar navbar-expand-md navbar-dark navbar-custom ">

<?php if ( 'container' == $container ) : ?>
	<div class="container " >
<?php endif; ?>

		

		<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse mr-auto ',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav mr-auto topnav ',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		); ?>
	<?php if ( 'container' == $container ) : ?>
	</div><!-- .container -->
	<?php endif; ?>

	<!-- Selected page lightup -->
	


	<!-- Your site title as branding in the menu -->
	<?php if ( ! has_custom_logo() ) { ?>

<?php if ( is_front_page() && is_home() ) : ?>

	<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

<?php else : ?>

	<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

<?php endif; ?>


<?php } else {
the_custom_logo();
} ?><!-- end custom logo -->

</nav><!-- .site-navigation -->



<!--
<header class="sticky-top"> 
        <div class="container">


            <?php $numbers = array(4, 6, 2, 22, 11);
                sort($numbers);
                
               
                 ?>
                    <h1><span class="badge badge-secondary"><?php  print_r(array_reverse($numbers)); ?> </span></h1>
                   
            
        </div>
</header>
-->