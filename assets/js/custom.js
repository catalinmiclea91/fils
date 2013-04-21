/*Accordion*/
var icons_ = {
    header: "accordion-icon",
    activeHeader: "accordion-icon-active"
};
$(".accordion").accordion({heightStyle: "content", collapsible: true, icons: icons_});
$(".faq").accordion({heightStyle: "content", collapsible: true, icons: icons_, header: "> div > h5"});
$("#toggle").click(function() {
    if ($(".accordion").accordion("option", "icons")) {
        $(".accordion").accordion("option", "icons", null);
    } else {
        $(".accordion").accordion("option", "icons", icons_);
    }
});

/*Menu Hover Color*/
$("#mainmenu ul").mouseenter(function(){
    $(this).parent().find("a").addClass("hover");
}).mouseleave(function(){
        $(this).parent().find("a").removeClass("hover");
    });

/*Mobile Navigation*/
var optionsList = '<option value="">Menu</option>';
$("#mainmenu").find("li").each(function() {
    $anchor = $(this).children('a');
    depth   = $(this).parents('ul').length - 1;
    indent  = '';

    if( depth ) {
        while( depth > 0 ) {
            indent += ' - ';
            depth--;
        }
    }
    optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
});
$("#mainmenu > li:first-child").after('<li class="mobile_link"><select class="navi">' + optionsList + '</select></li>');

$('.navi').on('change', function() {
    window.location = $(this).val();
});

/*Form Elements Clear Value*/
$('input[type="text"], textarea').focus(function() {
    if (this.value == this.defaultValue){
        this.value = '';
    }
}).blur(function() {
        if ($.trim(this.value) == ''){
            this.value = (this.defaultValue ? this.defaultValue : '');
        }
    });

$('.search_button').click(function(){
    if($('.search_bar input[name="s"]').val()!="" && $('.search_bar input[name="s"]').val()!="Type & Search"){
        window.location = "index.html?s="+$('.search_bar input[name="s"]').val();
    }
});

