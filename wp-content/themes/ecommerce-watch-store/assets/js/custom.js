function ecommerce_watch_store_menu_open_nav() {
	window.ecommerce_watch_store_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function ecommerce_watch_store_menu_close_nav() {
	window.ecommerce_watch_store_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.ecommerce_watch_store_currentfocus=null;
  	ecommerce_watch_store_checkfocusdElement();
	var ecommerce_watch_store_body = document.querySelector('body');
	ecommerce_watch_store_body.addEventListener('keyup', ecommerce_watch_store_check_tab_press);
	var ecommerce_watch_store_gotoHome = false;
	var ecommerce_watch_store_gotoClose = false;
	window.ecommerce_watch_store_responsiveMenu=false;
 	function ecommerce_watch_store_checkfocusdElement(){
	 	if(window.ecommerce_watch_store_currentfocus=document.activeElement.className){
		 	window.ecommerce_watch_store_currentfocus=document.activeElement.className;
	 	}
 	}
 	function ecommerce_watch_store_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.ecommerce_watch_store_responsiveMenu){
			if (!e.shiftKey) {
				if(ecommerce_watch_store_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				ecommerce_watch_store_gotoHome = true;
			} else {
				ecommerce_watch_store_gotoHome = false;
			}

		}else{

			if(window.ecommerce_watch_store_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.ecommerce_watch_store_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.ecommerce_watch_store_responsiveMenu){
				if(ecommerce_watch_store_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					ecommerce_watch_store_gotoClose = true;
				} else {
					ecommerce_watch_store_gotoClose = false;
				}

			}else{

			if(window.ecommerce_watch_store_responsiveMenu){
			}}}}
		}
	 	ecommerce_watch_store_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  jQuery(".product-tab.nav-tabs a").click(function(){
	jQuery(this).tab('show');
  });
 
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

jQuery(document).ready(function () {
	function ecommerce_watch_store_search_loop_focus(element) {
	var ecommerce_watch_store_focus = element.find('select, input, textarea, button, a[href]');
	var ecommerce_watch_store_firstFocus = ecommerce_watch_store_focus[0];  
	var ecommerce_watch_store_lastFocus = ecommerce_watch_store_focus[ecommerce_watch_store_focus.length - 1];
	var KEYCODE_TAB = 9;

	element.on('keydown', function ecommerce_watch_store_search_loop_focus(e) {
	  var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	  if (!isTabPressed) { 
		return; 
	  }

	  if ( e.shiftKey ) /* shift + tab */ {
		if (document.activeElement === ecommerce_watch_store_firstFocus) {
		  ecommerce_watch_store_lastFocus.focus();
			e.preventDefault();
		  }
		} else /* tab */ {
		if (document.activeElement === ecommerce_watch_store_lastFocus) {
		  ecommerce_watch_store_firstFocus.focus();
			e.preventDefault();
		  }
		}
	});
  }
  jQuery('.search-box span a').click(function(){
	  jQuery(".serach_outer").slideDown(1000);
	  ecommerce_watch_store_search_loop_focus(jQuery('.serach_outer'));
  });

  jQuery('.closepop a').click(function(){
	  jQuery(".serach_outer").slideUp(1000);
  });
});

jQuery('document').ready(function(){
	var owl = jQuery('#banner-product .owl-carousel');
	  owl.owlCarousel({
	  margin:20,
	  nav: false,
	  autoplay : true,
	  lazyLoad: true,
	  autoplayTimeout: 3000,
	  loop: false,
	  dots:true,
	  arrow:false,
	  navText : [],
	  responsive: {
		0: {
		  items: 1
		},
		600: {
		  items: 1
		},
		1000: {
		  items: 1
		}
	  },
	  autoplayHoverPause : true,
	  mouseDrag: true
	});
});