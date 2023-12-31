// Add your custom JS here.
jQuery(document).ready(function ($) {

    jQuery(".my-popup").magnificPopup({ type: "image" });

    //Checks for home page hero banner
    if(jQuery('.site-main > div:first-of-type:not(.home-hero-bannerr)').length) {
        jQuery('body').addClass('no-home-hero-banner');
    }

});
