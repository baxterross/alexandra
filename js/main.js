function switchPage(event) {
	event.preventDefault();
	var trigger = $(event.currentTarget);
	var wrapper = trigger.parents('.contentWrapper');
	var page = wrapper.attr('page');
	if (page != window.currentPage) {
		window.currentPage = page;
		var image = $('#left .img[page='+page+']');
		image.siblings('.img').fadeTo(300, 0, function() {
			image.fadeTo(300, 1);
			var bgColor = (page == 'modeling') ? 'rgba(212, 209, 194, 1)' : 'rgba(212, 209, 194, 0)';
			$('body').animate({
				'backgroundColor' : bgColor
			}, 300);
		});
		if (page == 'home') {
			var wrappers = wrapper.siblings('.contentWrapper');
			wrappers.push(wrapper[0]);
			wrappers.find('.contentDrawer').slideUp(300);
			wrappers.find('.menuLink').animate({
				top : '-20px'
			});
			wrappers.find('.contentInner').fadeTo(300, 0);
		} else {
			var wrappers = wrapper.prevAll('.contentWrapper');
			wrappers.find('.contentDrawer').slideUp(300);
			wrappers.find('.menuLink').animate({
				top : '-20px'
			});
			wrappers.find('.contentInner').fadeTo(300, 0);
			wrappers = wrapper.nextAll('.contentWrapper')
			wrappers.push(wrapper[0]);
			wrappers.find('.contentDrawer').slideDown(300);
			wrappers.find('.menuLink').animate({
				top : '20px'
			});
			wrappers.find('.contentInner').fadeTo(300, 0);
			wrapper.find('.contentInner').fadeTo(300, 1);
		}
	}
}
function scrollCenterContent(event) {
	var trigger = $(event.currentTarget);
	var wrapper = trigger.siblings('.centerContent');
	var slider = wrapper.find('div.slider');
	var tiles = slider.find('a');
	var offset = parseInt(slider.css('marginLeft'));
	var change = parseInt(wrapper.css('width'));
	if (trigger.hasClass('right')) {
		offset = offset - change;
	} else {
		offset = offset + change;
	}
	if (offset <= 0 && offset >= -(155 * tiles.length))
		slider.animate({
			marginLeft : offset
		}, 450);
}

function accordionClick(event) {
	var trigger = $(this);
	var triggers = $('.accordionTrigger').not(trigger);
	trigger.fadeTo(240, 0.8);
	triggers.fadeTo(240, 1);
	var accordion = trigger.attr('accordion');
	var drawer = $('.accordion[accordion='+accordion+']');
	drawer.slideDown();
	drawer.siblings('.accordion').slideUp();
}

$(document).ready(function() {
	$('a.menuLink').click(switchPage);
	var page = $('body').attr('page');
	$('a.menuLink[href='+page+']').trigger('click');
	$('.arrow').click(scrollCenterContent);
	$('.fancybox').fancybox();
	$('.fancyvideo').fancybox({
		'type' : 'iframe'
	});
	$('.accordionTrigger').click(accordionClick);
	$('.accordionTrigger[accordion=piano]').click();
});
