$(document).ready(function(){
//============================
//     RESPONSIVE SLIDES
//============================
// Slideshow 1
      $("#slider1").responsiveSlides({
        "timeout": 10000
      });



//============================
//     MEGAMENU CONTROL
//============================
    $('.menu-item').each(function(){
        $(this).mouseenter(function(){
           $(this).find('.mega-holder').css('left', '50%');
        });
        $(this).mouseleave(function(){
           $(this).find('.mega-holder').css('left', '');
           $('.mega-flyout').css('display', '');
        });
    });
    
    $('.mega-list li').each(function(){
        $(this).bind('click', function(){
            $(this).find('.mega-flyout').css('display', 'block');
        });
    });

});

