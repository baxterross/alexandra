var stateChangeHandlers = {
	home: {
		enter: [],
		leave: []
	},
	performance: {
		enter: [],
		leave: [],
		activeTab: null,
		tabs: {
			conducting: {
				enter: [],
				leave: []
			},
			singing: {
				enter: [],
				leave: []
			},
			piano: {
				enter: [],
				leave: []
			},
			theater: {
				enter: [],
				leave: []
			}
		}
	},
	teaching: {
		enter: [],
		leave: []
	},
	translation_editing: {
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

	var trigger = $(event.currentTarget),
		triggers = $('.menuLink').not(trigger),
		wrapper = trigger.parents('.contentWrapper'),
		wrappers = wrapper.siblings('.contentWrapper'),
		page = wrapper.attr('page'),
		image = $('#left .img[page='+page+']'),
		activeTab;


	if (page != window.currentPage) {
		triggers.removeClass('active');
		trigger.addClass('active');

		if (window.currentPage) {
			fireHandlers(window.stateChangeHandlers[window.currentPage].leave, window.currentPage);
			if (activeTab = window.stateChangeHandlers[window.currentPage].activeTab) {
				fireHandlers(window.stateChangeHandlers[window.currentPage].tabs[activeTab].leave, window.currentPage);
			}
		}
		
		history.pushState({}, page, page);
		window.currentPage = page;
		
		fireHandlers(window.stateChangeHandlers[window.currentPage].enter, window.currentPage);
		if (activeTab = window.stateChangeHandlers[window.currentPage].activeTab) {
			fireHandlers(window.stateChangeHandlers[window.currentPage].tabs[activeTab].enter, window.currentPage);
		}

		image.siblings('.img').fadeTo(300, 0, function() {
			image.fadeTo(300, 1);
		});

		wrappers.push(wrapper[0]);
		wrappers.find('.contentDrawer').slideUp(300);
		wrappers.find('.menuLink').animate({
			top : '-36px'
		});
		wrappers.find('.contentInner').fadeTo(300, 0);

		wrapper.find('.contentDrawer').slideDown(300);
		wrapper.find('.contentInner').fadeTo(300, 1);
	}
}

function scrollCenterContent(event) {
	var trigger = $(event.currentTarget),
		wrapper = trigger.siblings('.centerContent'),
		slider = wrapper.find('div.slider'),
		tiles = slider.find('a'),
		offset = parseInt(slider.css('marginLeft')),
		change = parseInt(wrapper.css('width'));

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

	if (previousAccordion)
		fireHandlers(window.stateChangeHandlers['performance'].tabs[previousAccordion].leave, 'performance', previousAccordion);

	fireHandlers(window.stateChangeHandlers['performance'].tabs[accordion].enter, 'performance', accordion);
	window.stateChangeHandlers['performance'].activeTab = accordion;
}

function QuoteHandler(holder, page, tab) {
	this.init(holder, page, tab);
}
QuoteHandler.prototype = {
  init: function(holder, page, tab) {
    this.identity = holder+' '+page+' '+tab;

    this.index = 0;
    this.quotes = $(holder)[0].children;
    this.interval = null;

    var handlers;
    if (tab)
	    handlers = window.stateChangeHandlers[page].tabs[tab];
    else
	    handlers = window.stateChangeHandlers[page];

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
	$('.accordionTrigger[accordion=conducting]').click();
});
