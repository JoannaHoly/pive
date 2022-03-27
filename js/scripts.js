$(function(){
	
	/* After click on image - open detail page in iframe */
	$('.wp-block-image').click (function(){
		let link = $(this).find('a').attr('href');
		
		/* If image link goes directly to img src, open it in new window, not in iframe */
		if (link.endsWith ('.jpg') || link.endsWith ('.jpeg') || link.endsWith ('.png') || link.endsWith ('.webp') || link.endsWith ('.gif')) {
			window.open(link);
		} else {
			$('.website').append('<iframe class="imgDetails" src="' + link + '">');
			$('.website__wrapper').addClass('website__wrapper--coverActive');
			$('.bodyCover').addClass('bodyCover--coverActive');
		}
	});
	
	/* Remove detail iframe after clicking outside of it */
	$(document).on('click', '.bodyCover', function(){
		$('.imgDetails').remove();
		$('.website__wrapper').removeClass('website__wrapper--coverActive');
		$('.bodyCover').removeClass('bodyCover--coverActive');
	});
});
