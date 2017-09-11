function is_touch_device() {
    return !!('ontouchstart' in window)
        || !!('onmsgesturechange' in window);
};

function get_timer_202(string_202) {
    var date_new_202 = string_202;
    var date_t_202 = new Date(date_new_202);
    var date_202 = new Date();
    var timer_202 = date_t_202 - date_202;
    if(date_t_202 > date_202) {var day_202 = parseInt(timer_202/(60*60*1000*24));
        if(day_202 < 10) {day_202 = "0" + day_202;}day_202 = day_202.toString();
        var hour_202 = parseInt(timer_202/(60*60*1000))%24;
        if(hour_202 < 10) {hour_202 = "0" + hour_202;}hour_202 = hour_202.toString();
        var min_202 = parseInt(timer_202/(1000*60))%60;
        if(min_202 < 10) {min_202 = "0" + min_202;}min_202 = min_202.toString();
        var sec_202 = parseInt(timer_202/1000)%60;
        if(sec_202 < 10) {sec_202 = "0" + sec_202;}sec_202 = sec_202.toString();
        timethis_202 = day_202 + " : " + hour_202 + " : " + min_202 + " : " + sec_202;
        $(".timerhello_202 p.result .result-day").text(day_202);
        $(".timerhello_202 p.result .result-hour").text(hour_202);
        $(".timerhello_202 p.result .result-minute").text(min_202);
        $(".timerhello_202 p.result .result-second").text(sec_202);}
    else {$(".timerhello_202 p.result .result-day").text("00");
        $(".timerhello_202 p.result .result-hour").text("00");
        $(".timerhello_202 p.result .result-minute").text("00");
        $(".timerhello_202 p.result .result-second").text("00");} }
function getfrominputs_202(){string_202 = "11/23/2017 12:00";
    get_timer_202(string_202);setInterval(function(){get_timer_202(string_202);},1000);}

$(document).ready(function(){

	$('#slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',

		autoplay: true,
		autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            }
        ]
	});

     $('#footer-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });


     $(document).ready(function(){ getfrominputs_202();});


     $(window).scroll(function(){
        if ( $(this).scrollTop() > 60){
            $(".logo img").addClass("menu-logo");
        } else if($(this).scrollTop() <= 60) {
            $(".logo img").removeClass("menu-logo") ;
        }
    });

        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });


    if (is_touch_device()) {
        $(".navbar-nav>li>a").on("click", function(){
            $(this).next(".dropdown-menu").toggle("show");
        });
    }



});