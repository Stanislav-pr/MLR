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
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            },
            475: {
                slidesPerView: 2,
                pagination: {
                    el: ".swiper-pagination",
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


    // map


});

function initMap() {
    let stylers = [
        {
            featureType: "all",
            elementType: "all",
            stylers: [
                { saturation: -100 },
                { lightness: 20 }
            ]
        },
        {
            featureType: "administrative",
            elementType: "labels.text.fill",
            stylers: [{ color: "#444444" }]
        },
        {
            featureType: "administrative.country",
            elementType: "geometry.stroke",
            stylers: [{ visibility: "on" }]
        },
        {
            featureType: "landscape",
            elementType: "all",
            stylers: [{ color: "#f2f2f2" }]
        },
        {
            featureType: "poi",
            elementType: "all",
            stylers: [{ visibility: "simplified" }]
        },
        {
            featureType: "poi.attraction",
            elementType: "labels.icon",
            stylers: [{ visibility: "on" }]
        },
        {
            featureType: "road",
            elementType: "all",
            stylers: [
                { saturation: -100 },
                { lightness: 45 }
            ]
        },
        {
            featureType: "road.highway",
            elementType: "all",
            stylers: [{ visibility: "simplified" }]
        },
        {
            featureType: "road.arterial",
            elementType: "labels.icon",
            stylers: [{ visibility: "off" }]
        },
        {
            featureType: "transit",
            elementType: "all",
            stylers: [{ visibility: "off" }]
        },
        {
            featureType: "water",
            elementType: "all",
            stylers: [
                { color: "#dcdcdc" },
                { visibility: "on" }
            ]
        }
    ];

    if (document.getElementById("map")) {
        let map,
            mapContainer = document.getElementById("map"),
            mapLat = parseFloat(mapContainer.getAttribute("data-lat")),
            mapLng = parseFloat(mapContainer.getAttribute("data-lng"));

        map = new google.maps.Map(mapContainer, {
            center: { lat: mapLat, lng: mapLng },
            zoom: 11,
            styles: stylers,
        });
    }
}