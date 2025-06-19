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

    document.querySelectorAll('.swiper-product').forEach((slider, index) => {
        const id = slider.dataset.slider;
        const wrapper = slider.closest('.slider-wrapper');
        const pagination = slider.querySelector('.swiper-pagination');
        const nextBtn = document.querySelector(`[data-slider-button="next-${id}"]`);
        const prevBtn = document.querySelector(`[data-slider-button="prev-${id}"]`);

        new Swiper(slider, {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            on: {
                slideChange: updateFourthVisibleSlidePadding,
                resize: updateFourthVisibleSlidePadding, // на всякий случай
                init: updateFourthVisibleSlidePadding,
            },
            pagination: {
                el: pagination,
                clickable: true,
            },
            navigation: {
                nextEl: nextBtn,
                prevEl: prevBtn,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.5,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                },
                475: {
                    slidesPerView: 2,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                },
                568: {
                    slidesPerView: 2.5,
                    pagination: false,
                },
                768: {
                    slidesPerView: 3,
                    pagination: false,
                },
                992: {
                    slidesPerView: 4,
                    pagination: false,
                }
            }
        });
    });

    function updateFourthVisibleSlidePadding() {
        document.querySelectorAll('.swiper-product').forEach(slider => {
            const swiperInstance = slider.swiper;
            if (!swiperInstance) return;

            swiperInstance.slides.forEach(slide => {
                slide.classList.remove('last-visible');
            });

            let count = swiperInstance.params.slidesPerView;
            if (typeof count !== 'number') {
                count = Math.floor(
                    swiperInstance.slidesEl.offsetWidth / swiperInstance.slides[0].offsetWidth
                );
            }

            const fourthVisibleIndex = swiperInstance.activeIndex + count - 1;

            const fourthSlide = swiperInstance.slides[fourthVisibleIndex];
            if (fourthSlide) {
                fourthSlide.classList.add('last-visible');
            }
        });
    }


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
        $('body').toggleClass('no-scroll');
        $('.mobile-menu').toggleClass('open');
        $(this).closest('.nav-mob').toggleClass('open');
    });


});