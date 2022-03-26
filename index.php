<?php
/**
 * Pive theme main file
 *
 * @package	Pive
 * @since 	1.0
 * @version 1.0
 * @author 	Joanna Hoły
 */

/* Don't allow direct access to this file */
if (!defined ('ABSPATH')) exit;
?>

<?php get_header(); // header.php ?>
	
	<main class="websiteContainer<?php $containerMod;?>">
	<?php
	if (have_posts()): 
		while (have_posts()):
			the_post();
			the_content();
		endwhile; // have_posts ()
	endif; // have_posts() 
	?>
	</main>
	
<?php get_footer(); //footer.php ?>