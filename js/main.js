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
    leave: [],
    piano: {
      enter: [],
      leave: []
    },
    singing: {
      enter: [],
      leave: []
    },
    conducting: {
      enter: [],
      leave: []
    },
    theater: {
      enter: [],
      leave: []
    }
  },
  teaching: {
    enter: [],
    leave: []
  }
};
function fireHandlers(handlers, page, tab) {
  handlers.map(function(handler) {
    handler(page, tab);
  });
}

function switchPage(event) {
	event.preventDefault();
	var trigger = $(event.currentTarget);
	var triggers = $('.menuLink').not(trigger);
	var wrapper = trigger.parents('.contentWrapper');
	var page = wrapper.attr('page');
	if (page != window.currentPage) {
	  triggers.removeClass('active');
	  trigger.addClass('active');
    window.currentPage && fireHandlers(window.stateChangeHandlers[window.currentPage].leave, window.currentPage);
	  history.pushState({}, page, page);
	  window.currentPage = page;
    fireHandlers(window.stateChangeHandlers[window.currentPage].enter, page)

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
	var trigger = $(this),
	    triggers = $('.accordionTrigger').not(trigger),
	    previousAccordion = triggers.filter('.active').attr('accordion'),
	    accordion = trigger.attr('accordion'),
	    drawer = $('.accordion[accordion='+accordion+']'),
	    drawers = drawer.siblings('.accordion');

	trigger.addClass('active');
	triggers.removeClass('active');

	drawer.slideDown();
	drawers.slideUp();

	previousAccordion && fireHandlers(window.stateChangeHandlers['performance'][previousAccordion].leave, 'performance', previousAccordion);
	fireHandlers(window.stateChangeHandlers['performance'][accordion].enter, 'performance', accordion);
}

function QuoteHandler(holder, page, tab) {
  this.init(holder, page, tab);
}
QuoteHandler.prototype = {
  init: function(holder, page, tab) {
    this.index = 0;
    this.quotes = $(holder)[0].children;
    this.interval = null;
    var handlers = window.stateChangeHandlers[page];
    handlers = tab && handlers[tab] || handlers;
    handlers.enter.push(this.start.bind(this));
    handlers.leave.push(this.stop.bind(this));
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
  var conductingQuotes = new QuoteHandler($('.accordion[accordion=conducting] .quotes'), 'performance', 'conducting');
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
