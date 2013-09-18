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
function disable_alpha_chars(event){
    // allow only backspace (8), delete (46), tab (9), all numerics (48-57), and numeric numpad (96-105) buttons
    exceptions = new Array(48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 46, 8, 9);
    
    for(i in exceptions){
        allow_key = false;
        
        if(event.keyCode == exceptions[i]){
            allow_key = true; 
            break
        }
    }
    
    if(!allow_key){
        event.preventDefault();
    }
}

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
    $("#number").bind("keydown", disable_alpha_chars);
    
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
        var res = result.trim();

        if(res === 'success'){
            alert('Thank you! A confirmation of your request will be emailed to you shortly.');
        }else{
            alert(result);
        }      
    }
    
    $("#contact-form").ajaxForm({
        url:            "../mail.execute.php",
        type:           "post",
        beforeSubmit:   validate_contactform,
        success:        execute_contactform,
        resetForm:      true
    });
}