jQuery(document).ready(function ($) {
    $(document).on('click', '.faqs-item-title', function () {
        $(this).toggleClass('active');
        $(this).next('.faqs-item-content').slideToggle();
    });

    $(".fancybox").fancybox({
        touch: false,
        autoFocus: false,
    });

    let swiper = new Swiper(".swiper-product", {
        slidesPerView: 4,
        spaceBetween: 0,
    });
});