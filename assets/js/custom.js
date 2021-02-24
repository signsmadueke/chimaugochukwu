"use strict";

$(document).ready(function () {
    $(".navbar-toggler").click(function () {
        $(".navbar-toggler").toggleClass("collapsed");
        $(".main-menu-collapse").toggleClass("show");
    });

    var animate = new WOW({
        boxClass: 'animate',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        scrollContainer: null,
        resetAnimation: true,
    });

    animate.init();

    $("#navigation .menu").click(function (openSidebar) {
        var $body = $('body');
        var $sidebar = $('#sidebar');
        var $menu = $('#navigation .menu');
        $body.toggleClass("sidebar-opened");
        $menu.toggleClass("collapsed");
    });

    $(document).keypress(function (e) {
        var $body = $('body');
        var $sidebar = $('#sidebar');
        var $menu = $('#navigation .menu');
        if (e.keyCode === 27) {
            $body.toggleClass("sidebar-opened");
            $menu.toggleClass("collapsed");
        }
    });
    $(".expand-description").click(function () {
        var $read_more = $('.expand-description span');
        var $description = $('#book-details .details .description');
        $description.toggleClass("show");
        $('.expand-description span').text == 'Read More' ? 'Read Less' : 'Read More';
    });

    const openEls = document.querySelectorAll("[data-open]");
    const closeEls = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openEls) {
        el.addEventListener("click", function () {
            const modalId = this.dataset.open;
            document.getElementById(modalId).classList.add(isVisible);
        });
    }

    for (const el of closeEls) {
        el.addEventListener("click", function () {
            this.parentElement.parentElement.parentElement.classList.remove(isVisible);
        });
    }

    document.addEventListener("click", e => {
        if (e.target == document.querySelector(".modal.is-visible")) {
            document.querySelector(".modal.is-visible [data-close]").click();
        }
    });

    document.addEventListener("keyup", e => {
        // if we press the ESC
        if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
            document.querySelector(".modal.is-visible [data-close]").click();
        }
    });
});




window.addEventListener('load', function () {

    var $window = $(window);
    $window.on('scroll', function () {
        var $nav = $('#navigation.fixed-nav');
        var height = $nav.outerHeight();
        var scrollTop = $window.scrollTop();
        if (scrollTop > height * 2) {
            $nav.addClass('show');
        } else {
            $nav.removeClass('show');
        }

    });
});




var pAgree = '1';

jQuery('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});


var counter = function() {

    $('#section-counter').waypoint( function( direction ) {

        if( direction === 'down' && !$(this.element).hasClass('animated') ) {

            var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
            $('.number').each(function(){
                var $this = $(this),
                    num = $this.data('number');
                    console.log(num);
                $this.animateNumber(
                  {
                    number: num,
                    numberStep: comma_separator_number_step
                  }, 7000
                );
            });

        }

    } , { offset: '95%' } );

}
counter();

var contentWayPoint = function() {
    var i = 0;
    $('.animate').waypoint( function( direction ) {

        if( direction === 'down' && !$(this.element).hasClass('animated') ) {

            i++;

            $(this.element).addClass('item-animate');
            setTimeout(function(){

                $('body .animate.item-animate').each(function(k){
                    var el = $(this);
                    setTimeout( function () {
                        var effect = el.data('animate-effect');
                        if ( effect === 'fadeIn') {
                            el.addClass('fadeIn animated');
                        } else if ( effect === 'fadeInLeft') {
                            el.addClass('fadeInLeft animated');
                        } else if ( effect === 'fadeInRight') {
                            el.addClass('fadeInRight animated');
                        } else if ( effect === 'reveal') {
                            el.addClass('reveal animated');
                        } else {
                            el.addClass('fadeInUp animated');
                        }
                        el.removeClass('item-animate');
                    },  k * 50, 'easeInOutExpo' );
                });

            }, 100);

        }

    } , { offset: '95%' } );
};
contentWayPoint();