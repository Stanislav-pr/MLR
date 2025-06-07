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

    $('.title-section.one-line').each(function () {
            let $heading = $(this);

        if ($heading.find('br').length > 0) {
            $heading.addClass('multiline');
            return;
        }

            let $clone = $heading.clone()
                .css({
                    visibility: 'hidden',
                    whiteSpace: 'nowrap',
                    width: 'auto',
                    display: 'inline-block',
                    position: 'absolute'
                })
                .appendTo('body');

            if ($heading.height() > $clone.height()) {
                $heading.addClass('multiline');
            }

            $clone.remove();

    });

});