<?php $img_src = wp_get_attachment_image_src($IMG_ID, 'medium'); ?>

<figure class="imgDetails__figure">
	<picture  class="imgDetails__picture">
	<img  class="imgDetails__image" src="<?php echo $img_src[0]; ?>">
	</picture>
	<figcaption  class="imgDetails__figcaption">
		<?php the_title ('<h3 class="imgDetails__title">','</h3>'); ?>
		<p class="imgDetails__caption"><?php echo wp_get_attachment_caption();?></p>
		<p class="imgDetails__date"><?php $post_date = get_the_date( 'l, F j Y' ); echo $post_date;
?></p>
	</figcaption>
</figure>