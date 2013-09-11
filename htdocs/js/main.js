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
            $('.mega-flyout').css('display', '');
            $(this).find('.mega-flyout').css('display', 'block');
        });
    });
});

//============================
//     SIDEBAR DROPDOWN
//============================
$(".sidebar-select").click(function(){
    $(".sidebar-select-list").toggleClass("hidden");
});

//=======================================
//     INPUTS PLACEHOLDER BEHAVIOUR
//=======================================
$("input, textarea").bind({
    focus: function() {
        if($(this).is("input")){
            if($(this).data("placeholder") === $(this).val()){
                $(this).val("");
            }
        }else if($(this).is("textarea")){
            if($(this).data("placeholder") === $(this).html()){
                $(this).html("");
            }
        }
    },
    blur: function() {
        if($(this).is("input")){
            if($(this).val().trim() === ""){
                $(this).val($(this).data("placeholder"));
            }
        }else if($(this).is("textarea")){
            if($(this).html().trim() === ""){
                $(this).html($(this).data("placeholder"));
            }
        }
    }
});
