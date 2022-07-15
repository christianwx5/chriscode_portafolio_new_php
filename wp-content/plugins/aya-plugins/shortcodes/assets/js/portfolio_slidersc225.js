;(function($,window,document,undefined){'use strict';$(window).on('load resize',function(){var winWidth=window.innerWidth,slideWidth;if(winWidth>768){slideWidth=winWidth*0.65;}else{slideWidth=winWidth;}
if($('.portfolio-slider-wrap.urban_slider').length){$('.gallery-top-slide').width(slideWidth);}
if($('.portfolio-slider-wrap.landing_slider').length){$('.portfolio-slider-wrap.landing_slider').find('.gallery-top-slide').outerWidth(slideWidth);$('.portfolio-slider-wrap.landing_slider').find('.slick-prev').css('margin-left',-slideWidth/2);$('.portfolio-slider-wrap.landing_slider').find('.slick-next').css('margin-left',slideWidth/2);}});if($('.portfolio-slider-wrap.urban_slider').length){$('.gallery-top').each(function(){var autoplaySpeed=$(this).data('autoplayspeed'),autoplay=$(this).data('autoplay'),speed=$(this).data('speed'),id='#'+$(this).data('id');$(this).slick({slidesToShow:1,autoplay:autoplay,slidesToScroll:1,arrows:true,speed:speed,autoplaySpeed:autoplaySpeed,infinite:true,asNavFor:id,centerMode:true,centerPadding:'30px',variableWidth:true,prevArrow:'<button type="button" class="slick-prev"></button>',nextArrow:'<button type="button" class="slick-next"></button>',cssEase:'ease'});});$('.gallery-thumb').each(function(){var autoplaySpeed=$(this).data('autoplayspeed'),autoplay=$(this).data('autoplay'),id='#'+$(this).data('id'),speed=$(this).data('speed');$(this).slick({slidesToShow:5,autoplay:autoplay,slidesToScroll:1,infinite:true,speed:speed,arrows:false,autoplaySpeed:autoplaySpeed,asNavFor:id,centerMode:true,centerPadding:'30px',focusOnSelect:true,cssEase:'ease',responsive:[{breakpoint:1199,settings:{slidesToShow:3}},{breakpoint:991,settings:{slidesToShow:1}}]});});}
if($('.portfolio-slider-wrap.landing_slider').length){$('.gallery-top').each(function(){var autoplaySpeed=$(this).data('autoplayspeed'),autoplay=$(this).data('autoplay'),speed=$(this).data('speed');$(this).slick({slidesToShow:1,autoplay:autoplay,slidesToScroll:1,arrows:true,dots:true,speed:speed,autoplaySpeed:autoplaySpeed,infinite:true,centerMode:true,centerPadding:'30px',variableWidth:true,prevArrow:'<button type="button" class="slick-prev"></button>',nextArrow:'<button type="button" class="slick-next"></button>',cssEase:'ease'});});}
if($('.portfolio-slider-wrap.listing_slider').length){$('.gallery-listing').each(function(){var autoplaySpeed=$(this).data('autoplayspeed'),autoplay=$(this).data('autoplay'),speed=$(this).data('speed');$(this).slick({slidesToShow:3,autoplay:autoplay,slidesToScroll:3,rows:2,arrows:true,dots:true,speed:speed,swipe:true,autoplaySpeed:autoplaySpeed,infinite:true,centerMode:false,prevArrow:'<button type="button" class="slick-prev"></button>',nextArrow:'<button type="button" class="slick-next"></button>',cssEase:'ease',responsive:[{breakpoint:991,settings:{slidesToShow:2,slidesToScroll:2,infinite:true,swipe:true}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1,infinite:true,swipe:true,arrows:false}}]});});}
if($('.portfolio-slider-wrap.simple_slider').length){$('.simple-gallery').each(function(){var autoplaySpeed=$(this).data('autoplayspeed'),autoplay=$(this).data('autoplay'),speed=$(this).data('speed');$(this).slick({slidesToShow:2,autoplay:autoplay,slidesToScroll:1,arrows:true,dots:true,speed:speed,swipe:true,autoplaySpeed:autoplaySpeed,infinite:true,centerMode:false,prevArrow:'<button type="button" class="slick-prev"></button>',nextArrow:'<button type="button" class="slick-next"></button>',cssEase:'ease',responsive:[{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1,infinite:true,swipe:true,arrows:false}}]});});}
if($('.portfolio-slider-wrap.interactive').length){$('.tabs-header > .container > ul > li > a').on('hover',function(e){e.preventDefault();if(!$(this).parent().hasClass('active')){var index_el=$(this).parent().index();$(this).parent().addClass('active').siblings().removeClass('active');$(this).parent().closest('.tabs').find('.tabs-item').removeClass('active').eq(index_el).addClass('active');}else{return false}});}
if($('.portfolio-slider-wrap.split_slider').length){var colors=$('.split-wrapper').data('colors');var colorsArray=colors.split(',');$('.split-wrapper').each(function(){$(this).multiscroll({autoplay:true,sectionsColor:colorsArray,scrollingSpeed:1300,easing:'easeInOutQuart',useAnchorsOnLoad:false,sectionSelector:'.split-ms-section',leftSelector:'.split-ms-left',rightSelector:'.split-ms-right'});});}})(jQuery,window,document);