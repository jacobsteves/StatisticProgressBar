jQuery(document).ready(function(){
	// This function gets simply animates the skillbars to slide out to
	//     its corresponding percentage
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
	
	// This function gets called whenever a tab gets clicked
	//     - switches current viewed tab to the tab corresponding
	//       to the tab clicked
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
});
