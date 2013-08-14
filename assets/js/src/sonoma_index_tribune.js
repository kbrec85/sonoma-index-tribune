/**
 * Sonoma Index Tribune
 * http://www.sonomanews.com
 *
 * Copyright (c) 2013 Kyle Breckenridge
 * Licensed under the GPLv2+ license.
 */
 
 ( function( window, undefined ) {
	'use strict';


 } )( this );
jQuery(document).ready(function($) {
	var mySwiper = $('.swiper-container').swiper({
		//Your options here:
		mode:'horizontal',
		loop: true,
		slidesPerView: 4,
		pagination: '.pagination',
		paginationClickable: true,

		//etc..
	});
  $('.swipe-nav.nav-left ').click(function() {
  	mySwiper.swipePrev()
  })
  $('.swipe-nav.nav-right').click(function() {
  	mySwiper.swipeNext()
  })
})