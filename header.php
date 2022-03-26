<?php
/**
 * Pive theme header
 *
 * @package	Pive
 * @since		1.0
 */

/* Don't allow direct access to this file */
if (!defined ('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo ('charset'); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<meta name="author" content="Joanna Hoły">
	<meta name="generator" content="Codeanywhere">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
	
<body> <?php // ends in footer.php ?>
	
	<header class="websiteHeader">
		<div class="websiteHeader__titleWrapper websiteTitle"></div>
			<h1 class="websiteTitle__title"><?php bloginfo('name'); ?></h1>
			<h2 class="websiteTitle__subtitle"><?php bloginfo('description'); ?></h2>
		</div>
		
		<?php 
		/* Main menu */
		if (has_nav_menu ('primary')):
			wp_nav_menu (array (
												'theme_location'	=> 'primary',
												'menu_class'			=> 'websiteMenu__container',
												'menu_id'					=> 'mainMenu',
												'container'				=> 'nav',
												'container_class'	=> 'websiteHeader__menu websiteMenu',
												'items_wrap'			=> "\n\t\t<ul id=\"%1\$s\" class=\"%2\$s\">\n%3\$s</ul>\n"
											));
		endif; // has_nav_menu ('primary')
		?>
	
	</header>