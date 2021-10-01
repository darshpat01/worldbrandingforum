<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<header id="masthead" class="py-2  <?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
			<div class="container d-flex flex-wrap align-items-center">
				<div class="site-logo"><?php the_custom_logo(); ?></div>
				<button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fa fa-bars mr-3"></span>
					</button>
				<div class="navbar navbar-light navbar-expand-md p-0 ml-auto">
				<div class="collapse navbar-collapse align-items-center ml-md-auto" id="navbarSupportedContent">
				<?php wp_nav_menu(
						array( 
							'menu' => 'Primary Menu', 
							'container' => false, 
							'menu_class' => 'nav navbar-nav position-relative w-100', 
							'echo' => true, 
							'fallback_cb' => 'wp_page_menu', 
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						 )
					); 	?>
					</div>
					</div>
			</div>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
