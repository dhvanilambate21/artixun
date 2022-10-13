$(document).ready(function() {
    $('.sl__zing').slick({
        arrows: true,
        dots: true,
        autoplay: false,
        autoplayspeed: 600,
        centerPadding: '60px',
        slidesToShow: 2,
        slidertoscroll: 2,
        margin: 16,
        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: true,
                    infinite: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false,
                    infinite: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    dots: true,
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    dots: true,
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.digi__slider').slick({
        arrows: false,
        dots: true,
        autoplay: false,
        Infinity: true,
        autoplayspeed: 600,
        slidesToShow: 2,
        slidertoscroll: 1,
        centermode: true,
        centerPadding: '60px',
        responsive: [{
                breakpoint: 767,
                settings: {
                    dots: true,
                    autoplay: true,
                    autoplayspeed: 600,
                    centerPadding: '60px',
                    slidesToShow: 1.5,
                    slidertoscroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 360,
                settings: {
                    centermode: true,
                    centerPadding: '60px',
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.attach').click("click", function() {
        $(this).parent().find("input[type='file']").trigger('click');
    })
    $("input[type='file']").change(function() {
        $(this).parent().find('.attach__button').text(this.value.replace(/C:\\fakepath\\/i, ''))
    })

    jQuery('.navbar-toggler-icon').on('click', function(e) {
        jQuery(this).toggleClass("open-menu");
        jQuery('body').toggleClass("fixed-position");
        e.preventDefault();
    });

    // copy code when press button
    $('#RootNode').click(function() {
        copyToClipboard('#copyText1');


    });
    $('#RootNode2').click(function() {
        copyToClipboard('#copyText2');


    });


    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        console.log($(element).text());
        document.execCommand("copy");
        // $(".btn-iconic-blue").click($(".btn-iconic-blue::before").css("display", "block"));
        $temp.remove();
    }
    copyToClipboard('.dev');


});

(function() {
    $('.read-more').on('click', function() {
        var $btn, t;
        t = $(this);
        $btn = t.find('span');
        $txt = t.prev();
        $txt.toggleClass('open');
        return $btn.toggle();
    });
}).call(this);