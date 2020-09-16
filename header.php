<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reptilesshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/rept-style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery')); ?>
	<?php wp_head(); ?>
	<?php include ("template-parts/analyticsTracking.php"); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'reptilesshop' ); ?></a>
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<div class="drawer">
				<div class="site-branding">
					<div class="site-info-header">
						<div class="site-title-area">
							<?php the_custom_logo(); ?>
							<h1 class="site-title_test"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</div>
						<div class="discription-area">
							<?php
							$reptilesshop_description = get_bloginfo( 'description', 'display' );
							if ( $reptilesshop_description || is_customize_preview() ) :
								?>
								<p class="site-description_test"><?php echo $reptilesshop_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span></span>
					  <span></span>
					  <span></span>
					</div>
				</div><!-- .site-branding -->
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_class'=> 'main-menu',
					)
				);
				?>
			</div>
			<p class="cus-header-area">
				<?php the_header_image_tag("class=cus-header-img"); ?>
			</p>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
