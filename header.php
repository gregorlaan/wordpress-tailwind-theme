<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tailwind_theme
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site bg-gray-100">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tailwindcss' ); ?></a>

	<header id="masthead" class="site-header bg-white shadow-sm mb-8">
		<div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-2">
			<div class="site-branding">
				<?php the_custom_logo(); ?>

				<a
					title="<?php echo get_bloginfo( 'description', 'display' ) // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>"
					class="site-title inline-block text-gray-500 text-2xl py-2 hover:text-blue-500"
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					rel="home"
				>
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation w-auto">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tailwindcss' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'link_before'	 => '<span class="inline-block text-gray-700 hover:text-blue-500 rounded-md text-md font-medium px-3 py-2">',
						'link_after'	 => '</span>'
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
