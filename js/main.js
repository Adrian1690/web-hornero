'use strict';

$(document).ready(function(){
	console.log('Page is readyy');

	$('.owl-carousel').owlCarousel({
        loop: true,
        autoplay : false,
        items : 5,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            400: {
                items: 2,
                nav: true,
                margin: 20
            },
            600: {
                items: 3,
                nav: true,
                margin: 20
            },
            1000: {
                items: 4,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    });

    $('.container-carousel .owl-carousel .item , .container-propuestas .propuesta').hover(
    	function(){
    		$(this).find('.info-fachada').fadeIn();
    		$(this).find('.fachada').addClass('scale1-1');
    	},
    	function(){
    		$(this).find('.info-fachada').fadeOut();	
    		$(this).find('.fachada').removeClass('scale1-1');
    	}
    );


});