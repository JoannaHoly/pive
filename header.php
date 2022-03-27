<?php
/**
 * Pive theme header
 *
 * @package	Pive
 * @since		1.0
 */

/* Don't allow direct access to this file */
if (!defined ('ABSPATH')) exit;

$post_type = get_post_type( $post->ID );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo ('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Joanna Hoły">
	<meta name="generator" content="Codeanywhere">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
	
<body class="website<?php if ($post_type == 'attachment') echo ' website--attachment';?>"> <?php // ends in footer.php ?>
	<div class="website__wrapper<?php if ($post_type == 'attachment') echo ' website__wrapper--attachment';?>"> <?php // ends in footer.php ?>
	
	<?php
	// Don't show header for attachment pages
	if ($post_type != 'attachment'):
	?>
	<header class="websiteHeader">
		<a href="https://joannaholy.pl/test" class="websiteHeader__item websiteTitle">
			<h1 class="websiteTitle__title"><?php bloginfo('name'); ?></h1>
			<h2 class="websiteTitle__subtitle"><?php bloginfo('description'); ?></h2>
		</a>
		
		<?php 
		/* Main menu */
		if (has_nav_menu ('primary')):
			wp_nav_menu (array (
												'theme_location'	=> 'primary',
												'menu_class'			=> 'websiteMenu__container',
												'menu_id'					=> 'mainMenu',
												'container'				=> 'nav',
												'container_class'	=> 'websiteHeader__item websiteMenu',
												'items_wrap'			=> "\n\t\t<ul id=\"%1\$s\" class=\"%2\$s\">\n%3\$s</ul>\n"
											));
		endif; // has_nav_menu ('primary')
		?>
	
	</header>
	<?php endif; // $post_type != 'attachment' ?>