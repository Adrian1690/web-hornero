'use strict';

$('#drop_responsive_child_b').on('click', function(){
    $(this).parent().toggleClass('active');

    if ( $('#button-header').attr('aria-expanded') == 'true' )
         $('#button-header').click();
});

$(document).ready(function(){
	/*console.log('Page is readyy');*/
    
    /*$('#nav_drop').hover(function(){

        $(this).find('.dropdown-toggle').css('color', '#7D7D7D !important');
        console.log($(this).find('.dropdown-toggle') );
    });*/
    
    $('#button-header').click(function(){
        if( $(this).attr('aria-expanded') == 'false' ){
            $(this).find('img').show();
            $(this).find('.icon-bar').hide();
            $(this).css('padding-top', '7px');

            if( $('#drop_responsive').hasClass('active') ) 
                $('#drop_responsive_child_b').click();

        }else{
            $(this).find('img').hide();
            $(this).find('.icon-bar').show();
            $(this).css('padding-top', '15px');
        
        }
    });

    
    
    
    $('#nav_drop').hover(function(){
        $(this).toggleClass('open');
    });

    $('#nav_drop').hover(
        function(){
            $(this).addClass('open');
        },
        function(){
            $(this).removeClass('open');
        }
    );

    $('.border-button').click(function(){
        $('.border-button').removeClass('active');
        $(this).addClass('active');
    });

    $('.border-button2').click(function(){
        $('.border-button2').removeClass('active');
        $(this).addClass('active');
    });

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
    		$(this).find('.info-fachada.hidefachada').fadeIn();
    		$(this).find('.fachada').addClass('scale1-1');
    	},
    	function(){
    		$(this).find('.info-fachada.hidefachada').fadeOut();	
    		$(this).find('.fachada').removeClass('scale1-1');
    	}
    );


    /* General Zoom img */
    $('.cont-fachada').hover(
        function(){
            $(this).find('.info-fachada-all.hidefachada').fadeIn();
            $(this).find('.fachada-all').addClass('scale1-1');
        },
        function(){
            $(this).find('.info-fachada-all.hidefachada').fadeOut();
            $(this).find('.fachada-all').removeClass('scale1-1');
        }
    );

});

var linkInterno = $('#flechaabajo');
linkInterno.on('click', function (e) {
    var Hnav = $('nav.navbar.navbar-default.navbar-fixed-top').height();
    var href = $(this).attr('href');
    console.log($(href).offset().top);
    $('html, body').animate({scrollTop: $(href).offset().top - Hnav}, 'slow');
    return false;
}); 

$('#gotop').click(function(){
    $('html, body').animate({scrollTop: 0}, 'slow');
    return false;
});


function allResize(){
    // all function to get resisze
    var Hnav = $('nav.navbar.navbar-default.navbar-fixed-top').height();
    $('body').css('padding-top', Hnav);    
}

allResize();
$(window).resize(allResize);

/* detect touch */
if("ontouchstart" in window){
    document.documentElement.className = document.documentElement.className + " touch";
}
if(!$("html").hasClass("touch")){
    /* background fix */
    $(".parallax").css("background-attachment", "fixed");
}

/* fix vertical when not overflow
 call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() > h){
            $(this).closest(".fullscreen").addClass("overflow");
        }
    });
}

$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax") && !$("html").hasClass("touch")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}

$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();

/* set parallax background-position */
function parallaxPosition(e){
    var heightWindow = $(window).height();
    var topWindow = $(window).scrollTop();
    var bottomWindow = topWindow + heightWindow;
    var currentWindow = (topWindow + bottomWindow) / 2;
    $(".parallax").each(function(i){
        var path = $(this);
        var height = path.height();
        var top = path.offset().top;
        var bottom = top + height;
        // only when in range
        if(bottomWindow > top && topWindow < bottom){
            var imgW = path.data("resized-imgW");
            var imgH = path.data("resized-imgH");
            // min when image touch top of window
            var min = 0;
            // max when image touch bottom of window
            var max = - imgH + heightWindow;
            // overflow changes parallax
            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
            top = top - overflowH;
            bottom = bottom + overflowH;
            // value with linear interpolation
            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
            // set background-position
            var orizontalPosition = path.attr("data-oriz-pos");
            orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
            $(this).css("background-position", orizontalPosition + " " + value + "px");
        }
    });
}
if(!$("html").hasClass("touch")){
    $(window).resize(parallaxPosition);
    //$(window).focus(parallaxPosition);
    $(window).scroll(parallaxPosition);
    parallaxPosition();
}