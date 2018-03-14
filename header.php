<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dcrcoffee
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dcrcoffee' ); ?></a>
	<header id="masthead" class="site-header">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<div class="site-branding">
			<?php
			endif;?>
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dcrcoffee' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
		<?php $recent = new WP_Query("page_id=7"); while($recent->have_posts()) : $recent->the_post();?>
		<section class="toilet">
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" class="dunno" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		<div class="header">
       	<h1 class="section-title"><?php the_title(); ?></h1>
       <?php the_content(); ?>
		</div>
<?php endwhile; ?>
			</section>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
