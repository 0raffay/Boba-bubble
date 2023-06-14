$(document).ready(function () {
    sliders()
    navBar()
    menuOpen()
})


function sliders() {
    $('.slider').slick({
        centerMode: true,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 778,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $('.toppingSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        arrows: false,
        dots: true,
    })
}


function navBar() {
    const toggle = $('#menu-toggle')
    const cross = $('#crossNav')
    const navbar = $('.mobile-nav')
    var nav = false;


    cross.click(function () {
        navbar.fadeOut('fast')
        nav = false;
    })

    toggle.click(function () {
        if (nav == false) {
            $('.mobile-nav').fadeIn('fast');
            nav = true
        }
        else {
            $('.mobile-nav').fadeOut('fast');
            nav = false
        }

    })
}

function menuOpen(){
    const menuBtn = $('.openMenu')
    const menuList = $('.menuList')
    const arrowUp = $('.arr-up')
    const arrowDown = $('.arr-down')
    let isOpen = false;

    menuBtn.click(function(){
        if(isOpen){
            menuList.slideUp()
            arrowUp.hide()
            arrowDown.show()
            isOpen = false;
        }
        else{
            menuList.slideDown()
            arrowUp.show()
            arrowDown.hide()
            isOpen = true;
        }
    })
}