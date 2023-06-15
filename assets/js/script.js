$(document).ready(function () {
    sliders()
    navBar()
    menuOpen()
    menuTabs()
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

    $('.bannerSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        // arrows: true,
        prevArrow: $('.slick-arrows .slick-prev'),
        nextArrow: $('.slick-arrows .slick-next'),
        dots: false,
        // fade: true,
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


function menuTabs() {
    const tabSwitch = $('.tabSwitchButton');
    const tabs = $('.menuTabsPanels .tabs');

    tabSwitch.each(function (index) {
        $(this).click(function () {
            tabSwitch.removeClass('active');
            $(this).addClass('active');

            var thisButton = index;
            var thisTab = tabs.eq(thisButton);

            tabs.hide();
            thisTab.show();
        });
    });

    // Show the initially active tab
    var activeButton = $('.tabSwitchButton.active');
    var activeIndex = tabSwitch.index(activeButton);
    tabs.eq(activeIndex).show();
}






// buttons.each(function(index) {
//     $(this).click(function() {
//       buttons.removeClass('active');
//       $(this).addClass('active');

//       var thisButtonIndex = index;
//       var thisTabsText = tabsText.eq(thisButtonIndex);

//       // tabsText.css('display', 'none');
//       tabsText.hide()
//       thisTabsText.show()
//       // thisTabsText.css('display', 'block');

//       // console.log(thisButtonIndex);
//       // console.log(thisTabsText);
//     });
//   });