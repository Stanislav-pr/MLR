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
                resize: updateFourthVisibleSlidePadding,
                init: updateFourthVisibleSlidePadding,
            },
            navigation: {
                nextEl: nextBtn,
                prevEl: prevBtn,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                },
                475: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                },
                568: {
                    slidesPerView: 2.5,
                    spaceBetween: 0,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                    pagination: {
                        el: pagination,
                        clickable: true,
                    },
                },
                993: {
                    slidesPerView: 4,
                    spaceBetween: 0,
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

    // const lenis = new Lenis();
    //
    // function raf(time) {
    //     lenis.raf(time);
    //     requestAnimationFrame(raf);
    // }
    //
    // requestAnimationFrame(raf);

    gsap.registerPlugin(ScrollTrigger)

    const lenis = new Lenis({
        smooth: true,
        lerp: 0.08,
    })

    function raf(time) {
        lenis.raf(time)
        ScrollTrigger.update()
        requestAnimationFrame(raf)
    }
    requestAnimationFrame(raf)

    gsap.utils.toArray('.title-section').forEach(title => {
        gsap.from(title, {
            scrollTrigger: {
                trigger: title,
                start: 'top 80%',
                toggleActions: 'play none none none',
            },
            opacity: 0,
            y: 20,
            duration: 1,
            ease: 'power1.out',
        })
    })

});

function initMap() {
    let stylers = [
        {
            featureType: "all",
            elementType: "all",
            stylers: [
                {saturation: -100},
                {lightness: 20}
            ]
        },
        {
            featureType: "administrative",
            elementType: "labels.text.fill",
            stylers: [{color: "#444444"}]
        },
        {
            featureType: "administrative.country",
            elementType: "geometry.stroke",
            stylers: [{visibility: "on"}]
        },
        {
            featureType: "landscape",
            elementType: "all",
            stylers: [{color: "#f2f2f2"}]
        },
        {
            featureType: "poi",
            elementType: "all",
            stylers: [{visibility: "simplified"}]
        },
        {
            featureType: "poi.attraction",
            elementType: "labels.icon",
            stylers: [{visibility: "on"}]
        },
        {
            featureType: "road",
            elementType: "all",
            stylers: [
                {saturation: -100},
                {lightness: 45}
            ]
        },
        {
            featureType: "road.highway",
            elementType: "all",
            stylers: [{visibility: "simplified"}]
        },
        {
            featureType: "road.arterial",
            elementType: "labels.icon",
            stylers: [{visibility: "off"}]
        },
        {
            featureType: "transit",
            elementType: "all",
            stylers: [{visibility: "off"}]
        },
        {
            featureType: "water",
            elementType: "all",
            stylers: [
                {color: "#dcdcdc"},
                {visibility: "on"}
            ]
        }
    ];

    if (document.getElementById("map")) {
        let map,
            mapContainer = document.getElementById("map"),
            mapLat = parseFloat(mapContainer.getAttribute("data-lat")),
            mapLng = parseFloat(mapContainer.getAttribute("data-lng"));

        map = new google.maps.Map(mapContainer, {
            center: {lat: mapLat, lng: mapLng},
            zoom: 11,
            styles: stylers,
        });
    }
}
