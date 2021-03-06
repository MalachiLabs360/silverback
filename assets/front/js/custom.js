"use strict";

/*************************
page loader
*************************/
function preloader() {
    $("#load").fadeOut();
    $('#loading').delay().fadeOut();

}

/*************************
Back to top
*************************/
function backtotop() {
    $('#back-to-top').fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('#back-to-top').fadeIn(1500);
        } else {
            $('#back-to-top').fadeOut(500);
        }
    });
    // scroll body to 0px on click
    $('#top').on('click', function() {
        $('top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}

/*************************
Accordion
*************************/
function accordion() {
    var $acpanel = $(".iq-accordion .iq-ad-block > .ad-details"),
        $acsnav = $(".iq-accordion .iq-ad-block > .ad-title");

    $acpanel.hide().first().slideDown("easeOutExpo");
    $acsnav.first().addClass("ad-active");
    $acsnav.on('click', function() {
        var $this = $(this).next(".ad-details");
        $acsnav.parent().removeClass("ad-active");
        $(this).parent().addClass("ad-active");
        $acpanel.not($this).slideUp("easeInExpo");
        $(this).next().slideDown("easeOutExpo");
        return false;
    });

}

/*************************
hidemenu
*************************/
function hidemenu() {
    $(document).ready(function() {
        $(".navbar a").click(function(event) {
            $(".navbar-collapse").collapse('hide');
        });
    });
}


/*************************
Amazing Tab
*************************/
function Tabbar() {
    $('#iq-amazing-tab').on('click', 'a', function() {
        $('#iq-amazing-tab  li a.active1').removeClass('active1');
        $(this).addClass('active1');
    });
}

/*************************
Header
*************************/
function header() {
    $('.navbar-nav li a').on('click', function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1500);
        e.preventDefault();
    });
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('header').addClass('menu-sticky');
        } else {
            $('header').removeClass('menu-sticky');
        }
    });
}

/*************************
Img Skrollr
*************************/
function imgskrollr() {
    var mySkrollr = skrollr.init({
        forceHeight: false,
        easings: {
            easeOutBack: function(p, s) {
                s = 1.70158;
                p = p - 1;
                return (p * p * ((s + 1) * p + s) + 1);
            }
        },
        mobileCheck: function() {
            //hack - forces mobile version to be off
            return false;
        }
    });
}

/*************************
Magnific Popup
*************************/

function popupgallery() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a.popup-img',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

}

/*************************
countdown
*************************/
function countdown1() {
    $('#countdown').countdown({
         date: '10/01/2019 23:59:59',
        offset: -8,
        day: 'Day',
        days: 'Days'
    } );
}

/*************************
owl-carousel 
*************************/
function owlcarousel() {
    $(".owl-carousel").each(function() {
        var $this = $(this),
            $items = ($this.data('items')) ? $this.data('items') : 1,
            $loop = ($this.data('loop')) ? $this.data('loop') : true,
            $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
            $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
            $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
            $space = ($this.attr('data-space')) ? $this.data('space') : 30;
        $(this).owlCarousel({
            loop: $loop,
            items: $items,
            responsive: {
                0: {
                    items: $this.data('xx-items') ? $this.data('xx-items') : 1
                },
                600: {
                    items: $this.data('xs-items') ? $this.data('xs-items') : 1
                },
                767: {
                    items: $this.data('sm-items') ? $this.data('sm-items') : 2
                },
                992: {
                    items: $this.data('md-items') ? $this.data('md-items') : 2
                },
                1190: {
                    items: $this.data('lg-items') ? $this.data('lg-items') : 3
                },
                1200: {
                    items: $items
                }
            },
            dots: $navdots,
            margin: $space,
            nav: $navarrow,
            navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
            autoplay: $autoplay,
            autoplayHoverPause: true
        });

    });

}

/*************************
Progress Bar
*************************/
function progress() {
    $('.iq-progress-bar > span').each(function() {
        var $this = $(this);
        var width = $(this).data('percent');
        $this.css({
            'transition': 'width 2s'
        });
        setTimeout(function() {
            $this.appear(function() {
                $this.css('width', width + '%');
            });
        }, 500);
    });
}


/*************************
widget
*************************/
function widget() {
    $('.iq-widget-menu > ul > li > a').on('click', function() {
        var checkElement = $(this).next();
        $('.iq-widget-menu li').removeClass('active');
        $(this).closest('li').addClass('active');
        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('normal');
        }
        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('.iq-widget-menu ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
        }
        if ($(this).closest('li').find('ul').children().length === 0) {
            return true;
        } else {
            return false;
        }
    });
}

/*************************
counter
*************************/
function counter() {
    $('.timer').countTo();
}

/*************************
Screenshots silder
*************************/
function screensilder() {
    var slide = $('.slider-single');
    var slideTotal = slide.length - 1;
    var slideCurrent = -1;

    function slideInitial() {
        slide.addClass('proactivede');
        setTimeout(function() {
            slideRight();
        }, 500);
    }

    function slideRight() {
        if (slideCurrent < slideTotal) {
            slideCurrent++;
        } else {
            slideCurrent = 0;
        }

        if (slideCurrent > 0) {
            var preactiveSlide = slide.eq(slideCurrent - 1);
        } else {
            var preactiveSlide = slide.eq(slideTotal);
        }
        var activeSlide = slide.eq(slideCurrent);
        if (slideCurrent < slideTotal) {
            var proactiveSlide = slide.eq(slideCurrent + 1);
        } else {
            var proactiveSlide = slide.eq(0);

        }

        slide.each(function() {
            var thisSlide = $(this);
            if (thisSlide.hasClass('preactivede')) {
                thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
            }
            if (thisSlide.hasClass('preactive')) {
                thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
            }
        });
        preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
        activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
        proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
    }

    function slideLeft() {
        if (slideCurrent > 0) {
            slideCurrent--;
        } else {
            slideCurrent = slideTotal;
        }

        if (slideCurrent < slideTotal) {
            var proactiveSlide = slide.eq(slideCurrent + 1);
        } else {
            var proactiveSlide = slide.eq(0);
        }
        var activeSlide = slide.eq(slideCurrent);
        if (slideCurrent > 0) {
            var preactiveSlide = slide.eq(slideCurrent - 1);
        } else {
            var preactiveSlide = slide.eq(slideTotal);
        }
        slide.each(function() {
            var thisSlide = $(this);
            if (thisSlide.hasClass('proactivede')) {
                thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
            }
            if (thisSlide.hasClass('proactive')) {
                thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
            }
        });
        preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
        activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
        proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
    }

    var left = $('.slider-left');
    var right = $('.slider-right');
    left.on('click', function() {
        slideLeft();
    });
    right.on('click', function() {
        slideRight();
    });
    slideInitial();
}

/*************************
Wow Animation
*************************/
function wowanimation() {
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
    });
    wow.init();
}

/*************************
 Contact
 *************************/
function contactForm() {
    $('#contact_sales, #contact_support').submit(function (e) {
        var flag = 0;

        var formID = "#" + $(this).attr("id");
        var supportID = formID === "#contact_sales" ? "#success_sales" : "#success_support";
        var inputClass = formID === "#contact_sales" ? ".require_sales" : ".require_support";
        var postUrl = /contact/ + (formID === "#contact_sales" ?  "sendSalesInfo" : "sendSupportInfo");

        e.preventDefault(); // Prevent Default Submission

        // Check text inputs
        $(inputClass).each(function() {
            if ($.trim($(this).val()) === '') {
                $(this).css("border", "1px solid red");
                e.preventDefault(); // Prevent Default Submission
                flag = 1;
            } else {
                $(this).css("border", "1px solid grey");
            }
        });

        // If form is contact sales check which checkboxes are checked and pass
        // to a string which will be concat to data being POST.
        if (formID === "#contact_sales") {
            var checked = 0;

            $("input[type=checkbox]:checked").each(function () {
                checked++;
            });

            // Mark checkboxes as red if no box is choosen, otherwise continues
            if (checked === 0){
                $('#interest_box_form').css("border", "1px solid red");
                e.preventDefault(); // Prevent Default Submission
                flag = 1;
            }
            else{
                $('#interest_box_form').css("border", "transparent");
            }
        }

        if (flag === 0) {
            $.ajax({
                url: postUrl,
                type: 'POST',
                data: $(this).serialize(),
            })
                .done(function() {
                    $(supportID).addClass("alert alert-success alert-dismissible mt-3");

                    var element = $('<strong>Thank You, Your message has been received.</strong>.\n' +
                        '                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '                            <span aria-hidden="true">&times;</span>\n' +
                        '                        </button>');

                    $(supportID).append(element);

                    $(formID)[0].reset();

                    // Hide referral box.
                    $('.collapse').collapse('hide');
                })
                .fail(function() {
                    alert('Ajax Submit Failed ...');
                });
        }
    });

    $("#inputStateSales").on('click', function (e) {
        // If referral box is selected then show box asking who referred, otherwise collapse box
        if ($("#inputStateSales").val() === "Referral") {
            $('.collapse').collapse('show');
            $("#referral_info").addClass("require_sales");
        }
        else {
            $('.collapse').collapse('hide');
            $("#referral_info").removeClass("require_sales");
        }
    });
}

/*************************
 Summit
 *************************/
function summitForm() {
    $('#summit_form').submit(function(e) {
        var flag = 0;

        var postUrl = '/summit/sendSummitInfo';

        e.preventDefault(); // Prevent Default Submission

        // Check text inputs
        $(".require_summit").each(function() {
            if ($.trim($(this).val()) === '') {
                $(this).css("border", "1px solid red");
                e.preventDefault(); // Prevent Default Submission
                flag = 1;
            } else {
                $(this).css("border", "1px solid grey");
            }
        });

        $("#radio_group").css("border", "transparent");

        // Check Radios
        if (!$("#summitYesRadio").is(':checked') && !$("#summitNoRadio").is(':checked')) {
            $("#radio_group").css("border", "1px solid red");
            flag = 1;
        }

        if (flag === 0) {
            $.ajax({
                url: postUrl,
                type: 'POST',
                data: $(this).serialize(),
            })
                .done(function() {
                    $("#success_summit").addClass("alert alert-success alert-dismissible mt-3");

                    var element = $('<strong>Thank You, Your message has been received.</strong>.\n' +
                        '                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '                            <span aria-hidden="true">&times;</span>\n' +
                        '                        </button>');

                    $("#success_summit").append(element);

                    $($("#summit_form"))[0].reset();
                })
                .fail(function() {
                    alert('Ajax Submit Failed ...');
                });
        }
    });
}

/*************************
 Training
 *************************/
function trainingForm() {
    $('#training_form').submit(function(e) {
        var flag = 0;

        var postUrl = '/training/sendTrainingInfo';

        e.preventDefault(); // Prevent Default Submission

        // Check text inputs
        $(".require_training").each(function() {
            if ($.trim($(this).val()) === '') {
                $(this).css("border", "1px solid red");
                e.preventDefault(); // Prevent Default Submission
                flag = 1;
            } else {
                $(this).css("border", "1px solid grey");
            }
        });

        if (flag === 0) {
            $.ajax({
                url: postUrl,
                type: 'POST',
                data: $(this).serialize(),
            })
                .done(function() {
                    $("#success_training").addClass("alert alert-success alert-dismissible mt-3");

                    var element = $('<strong>Thank You, Your message has been received.</strong>.\n' +
                        '                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '                            <span aria-hidden="true">&times;</span>\n' +
                        '                        </button>');

                    $("#success_training").append(element);

                    $($("#request_form"))[0].reset();
                })
                .fail(function() {
                    alert('Ajax Submit Failed ...');
                });
        }
    });
}

/*************************
 All function are called here
 *************************/
$(document).ready(function() {
    backtotop(),
    popupgallery(),
    owlcarousel(),
    accordion(),
    imgskrollr(),
    hidemenu(),
    preloader(),
    Tabbar(),
    header(),
    progress(),
    countdown1(),
    widget(),
    screensilder(),
    counter();

    // Calling Back JS Here
    contactForm();
    summitForm();
    trainingForm();
});


$(window).on('load', function() {
    wowanimation();
});