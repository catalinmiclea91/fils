
$(document).ready(function() {
    var year=0;

    $('#timeline-2013').click(function() {
        if(year==2013){}
        else{
        $('.line-wrapper').hide(600, function() {} );
        $('#2013').toggle(600);
        year=2013;
        }
    });


    $('#timeline-2012').click(function() {
        if(year==2012){}
        else{
        $('.line-wrapper').hide(600, function() {} );
        $('#2012').toggle(600);
        year=2012;
        }
    });

    $('#timeline-2011').click(function() {
        if(year==2011){}
        else{
        $('.line-wrapper').hide(600, function() {} );
        $('#2011').toggle(600);
        year=2011;
        }
    });

    $('#timeline-2010').click(function() {
        if(year==2010){}
        else{
        $('.line-wrapper').hide(600, function() {} );
        $('#2010').toggle(600);
        year=2010;
        }
    });

    $('#timeline-2009').click(function() {
        if(year==2009){}
        else{
        $('.line-wrapper').hide(600, function() {} );
        $('#2009').toggle(600);
        year=2009;
        }
    });

    $('#timeline-2008').click(function() {
        if(year==2008){}
        else{
        $('.line-wrapper').hide(600, function() {} );
        $('#2008').toggle(600);
        year=2008;
        }
    });

    $('#timeline-default-context').click(function() {
        if(year==0){}
        else{
        $('.line-wrapper').hide(600, function() {} );
        $('#default-context').toggle(600);
            year=0;
        }
    });

    /*Menu Hover Color*/
    $("#mainmenu ul").mouseenter(function() {
        $(this).parent().find("a").addClass("hover");
    }).mouseleave(function() {
        $(this).parent().find("a").removeClass("hover");
    });



    //Side Navigation
    $(".side_navigation").treeview({
        collapsed: true,
        unique: true,
        animated: "normal"
    });

    /*Form Elements Clear Value*/
    $('input[type="text"], textarea').focus(function() {
        if (this.value == this.defaultValue) {
            this.value = '';
        }
    }).blur(function() {
        if ($.trim(this.value) == '') {
            this.value = (this.defaultValue ? this.defaultValue : '');
        }
    });

    $('.search_button').click(function() {
        if ($('.search_bar input[name="s"]').val() != "" && $('.search_bar input[name="s"]').val() != "Type & Search") {
            window.location = "index.html?s=" + $('.search_bar input[name="s"]').val();
        }
    });



    /*Filter Options*/
    $(".filter_options ul li").click(function() {
        $(".filter_options ul li").removeClass("active");
        $(this).addClass("active");
    });

    /*Mobile Navigation*/
    var optionsList = '<option value="">Menu</option>';
    $("#mainmenu").find("li").each(function() {
        $anchor = $(this).children('a');
        depth = $(this).parents('ul').length - 1;
        indent = '';

        if (depth) {
            while (depth > 0) {
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



    /*Call Camera Slider*/
//    if ($('#cameraSlider').length) {
//        $('#cameraSlider').camera({
//            autoAdvance: true,
//            barPosition: 'top',
//            height: '56%',
//            imagePath: 'assets/images/cameraSlider/',
//            hover: true,
//            loader: 'none',
//            loaderColor: '#c9577d',
//            loaderBgColor: '#222',
//            loaderOpacity: 1,
//            loaderPadding: 1,
//            loaderStroke: 5,
//            navigation: true,
//            navigationHover: false,
//            mobileNavHover: true,
//            pagination: true,
//            playPause: false,
//            pauseOnClick: true,
//            pieDiameter: 38,
//            piePosition: 'rightTop',
//            slideOn: 'random',
//            thumbnails: true,
//            time: 4000,
//            transPeriod: 1500
//        });
//    }
//    if ($('#cameraSlider2').length) {
//        $('#cameraSlider2').camera({
//            autoAdvance: true,
//            barPosition: 'top',
//            height: '56%',
//            imagePath: 'assets/images/cameraSlider/',
//            hover: true,
//            loader: 'none',
//            loaderColor: '#c9577d',
//            loaderBgColor: '#222',
//            loaderOpacity: 1,
//            loaderPadding: 1,
//            loaderStroke: 5,
//            navigation: true,
//            navigationHover: true,
//            mobileNavHover: true,
//            pagination: false,
//            playPause: true,
//            pauseOnClick: true,
//            pieDiameter: 38,
//            piePosition: 'rightTop',
//            slideOn: 'random',
//            thumbnails: true,
//            time: 7000,
//            transPeriod: 1500
//        });
//    }
//    /*Tabs*/
//    $(".tabs").tabs();
//
//    /*Accordion*/
//    var icons_ = {
//        header: "accordion-icon",
//        activeHeader: "accordion-icon-active"
//    };
//    $(".accordion").accordion({heightStyle: "content", collapsible: true, icons: icons_});
//    $(".faq").accordion({heightStyle: "content", collapsible: true, icons: icons_, header: "> div > h5"});
//    $("#toggle").click(function() {
//        if ($(".accordion").accordion("option", "icons")) {
//            $(".accordion").accordion("option", "icons", null);
//        } else {
//            $(".accordion").accordion("option", "icons", icons_);
//        }
//    });

});