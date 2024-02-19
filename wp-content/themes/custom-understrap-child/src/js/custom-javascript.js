// Add your custom JS here.
jQuery(document).ready(function ($) {

    jQuery('.my-popup').magnificPopup({ type: 'image' });

    //Checks for home page hero banner
    if(jQuery('.site-main > div:first-of-type:not(.home-hero-bannerr)').length) {
        jQuery('body').addClass('no-home-hero-banner');
    }

    //Navbar background transition to dark on scroll
    const transitionHeader = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if(window.scrollY > 0) {
            transitionHeader.classList.add('navbar-scrolled');
        } else if(window.scrollY >= 0) {
                transitionHeader.classList.remove('navbar-scrolled'); 
        }
    });

    //project Slider in home page
    $('.project-slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 300,
        dots: true,
        arrows: true,
        prevArrow: '<a class="prev-arrow fa-chevron-left"></a>',
        nextArrow: '<a class="next-arrow fa-chevron-right"></a>'
    });
    

});
