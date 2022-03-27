<?php
/**
 * Pive theme footer
 *
 * @package	Pive
 * @since		1.0
 */
 
	/* Don't allow direct access to this file */
	if (!defined ('ABSPATH')) exit;

	// Don't show footer for attachment pages
	$post_type = get_post_type( $post->ID );
	if ($post_type != 'attachment'):
	?>

	<footer class="websiteFooter">
		<?php
			if (is_active_sidebar ('footer_widget')):
				dynamic_sidebar ('footer_widget');
			endif; // is_active_sidebar ('footer_widget')
		?>
	</footer>
<?php endif; // $post_type != 'attachment' ?>

	<div class="bodyCover"></div>
	</div><?php // .webside__wrapper ?>
</body>
</html>