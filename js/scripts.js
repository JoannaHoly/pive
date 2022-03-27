$(function(){
	
	/* After click on image - open detail page in iframe */
	$('.wp-block-image').click (function(e){
		//e.preventDefault();
		let link = $(this).find('a').attr('href');
		$('.website').append('<iframe class="imgDetails" src="' + link + '">');
		$('.website__wrapper').addClass('website__wrapper--coverActive');
		$('.bodyCover').addClass('bodyCover--coverActive');
	});
	
	/* Remove detail iframe after clicking outside of it */
	$(document).on('click', '.bodyCover', function(){
		$('.imgDetails').remove();
		$('.website__wrapper').removeClass('website__wrapper--coverActive');
		$('.bodyCover').removeClass('bodyCover--coverActive');
	});
});