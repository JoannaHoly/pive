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

$post_type = get_post_type( $post->ID );
?>

<?php get_header(); // header.php ?>
	
	<main class="websiteContainer<?php if ($post_type == 'attachment') echo ' websiteContainer--attachment';?>">
	<?php
	if (have_posts()): 
		while (have_posts()):
			the_post();
			if ($post_type != 'attachment'):
				the_content();
			else:
				get_template_part ('content-attachment'); // content-attachment.php
			endif; // $post_type != 'attachment'
		endwhile; // have_posts ()
	endif; // have_posts() 
	?>
	</main>
	
<?php get_footer(); //footer.php ?>