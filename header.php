<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package syah
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'syah' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="header-wrap wrap">
			<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title brand"><a class="text-dark text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title brand"><a class="text-dark text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					// endif;
					// $syah_description = get_bloginfo( 'description', 'display' );
					//if ( $syah_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $syah_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation navbar">		
					<button class="burger-mobile" type="button" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-label="Toggle navigation">
						<!--//<?php esc_html_e( 'Primary Menu', 'syah' ); ?>-->
						<span class="navbar-toggle-icon">&#9776;</span>
					</button>
					<div class="mobile-hide" id="menu-toggle">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'	 => 'navbar-nav',
								'add_li_class'   => 'nav-item',
								'link_class'  	 => 'nav-link',
								
							)
						);
						?>
					</div>
				</nav><!-- #site-navigation -->
		<div><!-- .header-wrap -->
	</header><!-- #masthead -->
