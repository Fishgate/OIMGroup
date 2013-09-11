//============================
//     RESPONSIVE SLIDES
//============================
// Slideshow 1
      $("#slider1").responsiveSlides({
        "timeout": 10000
      });

//============================
//     SUPERFISH NAV
//============================
$('ul.sf-menu').superfish({
    pathClass: 'current'
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