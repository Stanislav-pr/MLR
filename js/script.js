jQuery(document).ready(function ($) {

    // accordeon faq

    $(document).on('click', '.faqs-item-title', function () {
        $(this).toggleClass('active');
        $(this).next('.faqs-item-content').slideToggle();
    });


    // modals

    $(".fancybox").fancybox({
        touch: false,
        autoFocus: false,
    });


    //slider

    let swiper = new Swiper(".swiper-product", {
        slidesPerView: 4,
        spaceBetween: 0,
        breakpoints: {
            0: {
                slidesPerView: 1.5,
            },
            475: {
                slidesPerView: 2,
            },
            568: {
                slidesPerView: 2.5,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            }
        }
    });


    // title line

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


    // burger menu

    $(document).on('click', '.burger', function () {
        $(this).toggleClass('open');
        $('.mobile-menu').toggleClass('open');
        $(this).closest('.nav-mob').toggleClass('open');
    });


});