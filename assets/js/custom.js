


var myFullpage = new fullpage('#fullpage', {
    //anchors: ['firstPage', 'secondPage', '3rdPage'],
    //sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
    navigation: true,
    navigationPosition: 'right',
    //navigationTooltips: ['First page', 'Second page', 'Third and last page'],
    responsiveWidth: 1100,
    afterResponsive: function (isResponsive) {

    }

});



var swiper4 = new Swiper('.mySwiper', {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 30,
    // centeredSlides: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: "auto",
            spaceBetween: 20,
        },
        768: {
            slidesPerView: "auto",
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 0,
        }
    }

});

function myFunction(x) {
    x.classList.toggle("change");
}

$(function () {
    $(window).scroll(function () {

        if ($(this).scrollTop() > 200) {
            $(".NewHydrogen_header").addClass("sticky_header1");
        } else {
            $(".NewHydrogen_header").removeClass("sticky_header1");
        }
    });
    $(window).scroll(function () {

        if ($(this).scrollTop() > 250) {
            $(".NewHydrogen_header").addClass("sticky_header");
        } else {
            $(".NewHydrogen_header").removeClass("sticky_header");
        }
    });



    $(".icon-x").click(function () {
        $(".NewHydrogen_main_menu").slideToggle();
    });


    $(".close_menu").click(function () {
        $(".icon-x").trigger("click");
    });


    $(".accordion_head").click(function () {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").html('<i class="fas fa-chevron-down"></i>');

        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").html('<i class="fas fa-chevron-down"></i>');
            // $(this).removeClass('mb-0');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").html('<i class="fas fa-chevron-up"></i>');
            // $(this).addClass('mb-0');
        }
    });





    $(".loadmorebtn1").click(function () {
        $("#fp-nav ul li:nth-child(2) a span").trigger("click");
    });

    $(".loadmorebtn2").click(function () {
        $("#fp-nav ul li:nth-child(3) a span").trigger("click");
    });

    $(".loadmorebtn3").click(function () {
        $("#fp-nav ul li:nth-child(4) a span").trigger("click");
    });

    $(".loadmorebtn4").click(function () {
        $("#fp-nav ul li:nth-child(5) a span").trigger("click");
    });
});





if (Modernizr.mq('(max-width: 767px)')) {
    $('.head').append('<i class="fas fa-angle-down arrow"></i>');
    $('.head').click(function () {
        $(this).toggleClass('active');
        $(this).parent().find('.arrow').toggleClass('arrow-animate');
        $(this).parent().find('.content').slideToggle(280);
    });

}
