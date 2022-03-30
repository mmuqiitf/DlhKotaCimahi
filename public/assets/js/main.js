(function($){
	"use strict"
	// Go to Top
	$(function(){
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 600) $('.back-to-top').addClass('active');
			if (scrolled < 600) $('.back-to-top').removeClass('active');
		});  
		// Click Event
		$('.back-to-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  500);
		});
	});

	// pilihan grafik 
	   const select = (el, all = false) => {
		el = el.trim()
		if (all) {
		  return [...document.querySelectorAll(el)]
		} else {
		  return document.querySelector(el)
		}
	  }
	  const on = (type, el, listener, all = false) => {
		let selectEl = select(el, all)
		if (selectEl) {
		  if (all) {
			selectEl.forEach(e => e.addEventListener(type, listener))
		  } else {
			selectEl.addEventListener(type, listener)
		  }
		}
	  }
	  window.addEventListener('load', () => {
		let portfolioContainer = select('.grafik-container');
		if (portfolioContainer) {
		  let portfolioIsotope = new Isotope(portfolioContainer, {
			itemSelector: '.grafikitem',
			layoutMode: 'fitRows',
		  });
	
		  let portfolioFilters = select('#grafik-flters li', true);
	
		  on('click', '#grafik-flters li', function(e) {
			e.preventDefault();
			portfolioFilters.forEach(function(el) {
			  el.classList.remove('filter-active');
			});
			this.classList.add('filter-active');
	
			portfolioIsotope.arrange({
			  filter: this.getAttribute('data-filter')
			});
			portfolioIsotope.on('arrangeComplete', function() {
			  AOS.refresh()
			});
		  }, true);
		}
	  });
	//   end pilihan grafik
}(jQuery));