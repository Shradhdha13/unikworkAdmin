!(function ($) {
    "use strict";
    $(window).on('load', function () {
        $('.page-preloader').addClass('closed');
    });

    $(document).ready(function () {
        $('.testimonial-slide').slick({
            dots: false,
            infinite: true,
            speed: 500,
            autoplay: true,
            slidesToScroll: 1,
            autoplaySpeed: 5000,
            fade: true,
            // prevArrow: false,
            // nextArrow: false
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
        $('.web-portfollio-slide').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 1,
                    }
                },
            ]
        });
        $('.slick-prev, .slick-next').appendTo('.next-prev-btn');

        $('.blog-slide-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            fade: true,
            asNavFor: '.blog-slide-content'
        });
        $('.blog-slide-content').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            asNavFor: '.blog-slide-image',
            dots: false,
            fade: true
        });
        $('.blog-slider .slick-prev.slick-arrow, .blog-slider .slick-next.slick-arrow').appendTo('.blog-slide-btn');
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        cache: false,
        complete: function () {
            
        },
    });
    $("#contact_form").validate({
        rules: {
            firstname: {
                required: true,
                maxlength: 30
            },
            lastname: {
                required: true,
                maxlength: 30
            },
            email: {
                required: true,
                email: true,
                maxlength: 30
            },
            phone: {
                required: true,
                maxlength: 15
            },
            iam: "required",
            help: "required",
            message: {
                required: true,
                minlength: 10
            },
            captcha: "required",
        },
        submitHandler: function (form) {
            $.ajax({
                type: $(form).attr('method'),
                url: $(form).attr('action'),
                data: $(form).serialize(),
                dataType : 'json'
            })
            .done(function (response) {
                $('#thankyou').modal('show');
                $("#contact_form").find("input").val("");
                jQuery( "#ContactCaptcha_ReloadIcon" ).trigger( "click" );
                $('#contact_form').load(location.href + ' .form-group>*', '');
            })
            .fail(function(){
                $('#thankyou').modal('show');
                $("#contact_form").find("input").val("");
                jQuery( "#ContactCaptcha_ReloadIcon" ).trigger( "click" );
                $('#contact_form').load(location.href + ' .form-group>*', '');
            });
            return false;
        }
    });
    $("#apply_position").validate({
        rules: {
            firstname: {
                required: true,
                maxlength: 30
            },
            lastname: {
                required: true,
                maxlength: 30
            },
            email: {
                required: true,
                email: true,
                maxlength: 50
            },
            phone: {
                required: true,
                maxlength: 15
            },
            expected_salary: {
                maxlength: 7
            },
            cv: {
                required: true
            }
        },
        submitHandler: function (form) {
            var formData = new FormData(form)
            formData.append('requirement_id',$('#requirement_id').val());
            $.ajax({
                type: $(form).attr('method'),
                url: $(form).attr('action'),
                data: formData,
                dataType : 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#page-preloader').css('opacity','1');
                    $('#page-preloader').css('visibility','visible');
                },
            })
            .done(function (response) {
                $('#page-preloader').css('opacity','0');
                $('#page-preloader').css('visibility','hidden');
                $('#thankyou').modal('show');
                $("#apply-position").find("input").val("");
            }).fail(function(){
                $('#page-preloader').css('opacity','0');
                $('#page-preloader').css('visibility','hidden');
                $('#thankyou').modal('show');
                $("#apply-position").find("input").val("");
            });
            return false;
        }
    });
    $('body').on('mouseenter mouseleave', '.nav-item', function (e) {
        if ($(window).width() > 750) {
            var _d = $(e.target).closest('.nav-item');
            _d.addClass('show');
            setTimeout(function () {
                _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
            }, 1);
        }
    });
    $(window).scroll(function () {
        var sticky = $('.fixed-top'),
            scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('sticky');
        else sticky.removeClass('sticky');
    });
    $('.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
    });
    $("#tech-title .nav-tabs a").click(function () {
        var position = $(this).parent().position();
        $("#tech-title .slider").css({"left": +position.left});
    });
    var actWidth = $("#tech-title .nav-tabs").find(".active").parent("li").width();
    var actPosition = $("#tech-title .nav-tabs .active").position();
    $("#tech-title .slider").css({"left": 0, "width": actWidth});
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            },
            complete: function () {
                $(this).html($(this).html() + "+")
            }
        });
    });
new WOW().init();
$(document).ready(function(){
    $("a[title ~= 'BotDetect']").removeAttr("style");
    $("a[title ~= 'BotDetect']").removeAttr("href");
    $("a[title ~= 'BotDetect']").css('visibility', 'hidden');
});

})(jQuery);

$(document).ready(function(){
    $('#search').on('keyup',function(){
        // if( this.value.length < 0 ) return;
        var query = $(this).val();
        $.ajax({
            url: 'search',
            type: 'GET',
            data: {'search':query},
            success:function(data){
                $('tbody').html(data);
            },
            error: function(e) {
            }
        });
    });
});

var ext = ['image/png','image/jpg','image/jpeg','application/pdf', 'png', 'jpg', 'jpeg', 'pdf'];
// $('.file-upload').change(function(e){
    

    
// });
// let isValid = false
// $("#portfolio").change(function(e){
//     var className = $(this).data('error');
//     $('.'+className).text('');
//     var portfolio = $('#portfolio').val();
//     let portfolioType = portfolio.split('.')[1];
//     if(ext.includes(portfolioType)){
//         $('.'+className).text('');
//         isValid = true
//         $('.apply-now').prop('disabled',false);
//     }
//     else{
//         isValid = false
//         var className = $(this).data('error');
//         $('.'+className).text('Please valid only png, jpg, jpeg & pdf files');
//         $('.apply-now').prop('disabled',true);
//     }
// })

$("#cv").change(function(e){
    $('.apply-now').prop('disabled',true);
    var className = $(this).data('error');
    $('.'+className).text('');
    var cv = $('#cv').val();
    let cvType = cv.split('.')[1];
    if(ext.includes(cvType)){
        $('.'+className).text('');
        // var portfolio = $('#portfolio').val();
        // if(isValid || portfolio == ""){
            $('.apply-now').prop('disabled',false);
        // }
    }
    else{
        var className = $(this).data('error');
        $('.'+className).text('Please valid only png, jpg, jpeg & pdf files');
    }
})