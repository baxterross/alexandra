var stateChangeHandlers = {
  home: {
    enter: [],
    leave: []
  },
  academe: {
    enter: [],
    leave: []
  },
  performance: {
    enter: [],
    leave: []
  },
  teaching: {
    enter: [],
    leave: []
  }
};
function stateChange(page) {
  window.currentPage && window.stateChangeHandlers[window.currentPage].leave.map(function(handler) {
    handler(page);
  });
	history.pushState({}, page, page);
	window.currentPage = page;
  window.stateChangeHandlers[window.currentPage].enter.map(function(handler) {
    handler(page);
  });
}

function switchPage(event) {
	event.preventDefault();
	var trigger = $(event.currentTarget);
	var wrapper = trigger.parents('.contentWrapper');
	var page = wrapper.attr('page');
	if (page != window.currentPage) {
		window.stateChange(page);
		var image = $('#left .img[page='+page+']');
		image.siblings('.img').fadeTo(300, 0, function() {
			image.fadeTo(300, 1);
/*
			var bgColor = (page == 'performance') ? 'rgba(212, 209, 194, 1)' : 'rgba(212, 209, 194, 0)';
			$('body').animate({
				'backgroundColor' : bgColor
			}, 300);
*/
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
	trigger.addClass('active');
	triggers.removeClass('active');
	var accordion = trigger.attr('accordion');
	var drawer = $('.accordion[accordion='+accordion+']');
	drawer.slideDown();
	drawer.siblings('.accordion').slideUp();
}

function QuoteHandler(holder, page) {
  this.init(holder, page);
}
QuoteHandler.prototype = {
  init: function(holder, page) {
    this.index = 0;
    this.quotes = $(holder)[0].children;
    this.interval = null;
    window.stateChangeHandlers[page].enter.push(this.start.bind(this));
    window.stateChangeHandlers[page].leave.push(this.stop.bind(this));
  },
  start: function() {
    window.setTimeout(this.showQuote.bind(this, this.quotes[this.index]), 1 * 1000);
    this.interval = window.setInterval(this.advance.bind(this), 10 * 1000);
  },
  stop: function() {
    if (this.interval) {
      window.clearInterval(this.interval);
      this.interval = null;
    }
    this.hideAllQuotes();
  },
  advance: function() {
    this.hideQuote(this.quotes[this.index]);
    if (++this.index == this.quotes.length)
      this.index = 0;
    window.setTimeout(this.showQuote.bind(this, this.quotes[this.index]), 1 * 1000);
  },
  showQuote: function(quote) {
    quote.classList.add('visible');
  },
  hideQuote: function(quote) {
    quote.classList.remove('visible');
  },
  hideAllQuotes: function() {
    for (var i = 0; i < this.quotes.length; i++) {
      this.hideQuote(this.quotes[i]);
    }
  }
};

$(document).ready(function() {
  var teachingQuotes = new QuoteHandler($('#teaching .quotes'), 'teaching');
  var conductingQuotes = new QuoteHandler($('.accordion[accordion=conducting] .quotes'), 'performance');
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
