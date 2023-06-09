<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chuduuu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<header id="masthead" class="site-header">
		<div id="top-header" class="bg-primary">
				<div class="container">
					<div class="row"> 
						<div class="col-8">
						<div class= "hotlien">
								<a href="#">SĐT: 0784.666.456 - 097.121.0077</a>
								<a href="#">GMAIL: lvhouse.co@gmail.com</a>
						</div>
						</div>
						<div class="col-4">
							<div class= "socie">
							<p><button>Tư vấn miễn phí </button></p>
							</div>
						</div>
					</div>
				</div>
		</div> 



<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'chuduuu' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$chuduuu_description = get_bloginfo( 'description', 'display' );
					if ( $chuduuu_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $chuduuu_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</div>
			<div class="col-md-8">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'chuduuu' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
