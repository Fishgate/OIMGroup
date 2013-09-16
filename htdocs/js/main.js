//============================
//     RESPONSIVE SLIDES
//============================
// Slideshow 1
$("#slider1").responsiveSlides({ "timeout": 10000 });

//============================
//     MEGAMENU CONTROL
//============================
$('.menu-item').each(function(){
    $(this).bind({
        mouseenter: function(){
            $(this).find('.mega-holder').css('left', '50%');
        },
        mouseleave: function(){
            $(this).find('.mega-holder').css('left', '');
            $('.mega-flyout').css('display', '');
        }
    });
});

$('.mega-list li').each(function(){
    $(this).bind('click', function(){
        $('.mega-flyout').css('display', '');
        $(this).find('.mega-flyout').css('display', 'block');
    });
});

//============================
//     SIDEBAR DROPDOWN
//============================
$(".sidebar-select").click(function(){
    $(".sidebar-select-list").toggleClass("hidden");
});

//------------ TYRONE simply scroll init
$("#scroller").simplyScroll();

//=======================================
//     INPUTS PLACEHOLDER BEHAVIOUR 
//=======================================
$("input, textarea").bind({
    focus: function() {
        $(this).removeAttr("style"); //resets the inline styling caused by an error in the input
        
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


//=======================
//     CONTACT FORM
//=======================
function validate (target) {
    if ($(target).val() !== $(target).data("placeholder")) {
        return true;
    }else{
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
}

function validate_email (target) {
    var atSymbol    = $(target).val().indexOf('@');
    var dot         = $(target).val().indexOf('.');
    var lastDot     = $(target).val().lastIndexOf('.');
    var length      = ($(target).val().length)-1;
    var secondAt    = $(target).val().indexOf('@', (atSymbol+1));
    
    if($(target).val() === $(target).data("placeholder")){
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
    else if(atSymbol < 0){
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
    else if(atSymbol === 0){
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
    else if(dot < 0){
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
    else if(lastDot < atSymbol){
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
    else if(lastDot >= length){
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
    else if(secondAt > 0){
        $(target).css({background: "#B32C32", color: "white"});
        return false;
    }
    else{
        return true;
    }
}

if($("#contact-form").length > 0){
    function validate_contactform() {
        var valid_name      = validate("#name");
        var valid_number    = validate("#number");
        var valid_email     = validate_email("#email");
        var valid_message   = validate("#message");
        
        if(valid_name && valid_number && valid_email && valid_message){
            return true;
        }else{
            alert('Please fill in all the required form fields correctly before submitting');
            return false;
        }
        
    }
    
    function execute_contactform(result) {
        console.log(result);
    }
    
    $("#contact-form").ajaxForm({
        url:            "../mail.execute.php",
        type:           "post",
        beforeSubmit:   validate_contactform,
        success:        execute_contactform,
        resetForm:      true
    });
}
