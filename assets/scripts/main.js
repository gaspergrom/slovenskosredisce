$(function() {
    lightGallery(document.getElementById('lightgallery'));
    btn=$('.header__btn');
    navbar=$('.header__links');
    body=$('body');
    btn.click(function(e) {
        e.preventDefault();
        navbar.toggleClass('open');
        btn.toggleClass('open');
        body.toggleClass('overflow');
        $("header").toggleClass('open');
    });

    $('#owl').owlCarousel({
        loop:true,
        dots:true,
        items:1,
        margin: 10,
        nav: false
    });

    $("[data-video]").click(function () {
        $(".video__popup").addClass("open");
        $("body").addClass("overflow");
        $(".video__popup").append("<video controls><source src='"+ $(this).attr("data-video") +"' type='video/mp4'></source></video>")
    });
    $("#video-close").click(function () {
        $(".video__popup").removeClass("open");
        $("body").removeClass("overflow");
        $(".video__popup video").remove();
    });

    $('#sponzorji').owlCarousel({
        loop:true,
        dots:false,
        margin: 10,
        nav: false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        responsive: {
            0:{
                items:3
            },
            768:{
                items:5
            },
            991:{
                items:6
            }
        }
    });

    if ($(this).scrollTop() > 100) {
        $('header').addClass("scroll");
    }

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('header').addClass("scroll");
        } else {
            $('header').removeClass("scroll");
        }
    });
    //
    $("[data-popup]").click(function (e) {
        $("#"+$(this).attr("data-popup")).addClass("open");
        body.addClass("overflow");
    });
    $(".popup__overlay").click(function (e) {
        $(this).removeClass("open");
        body.removeClass("overflow");
    });
    $(".popup").click(function (e) {
        e.stopPropagation();
    });



    //ajax
    $("[data-ajax]").submit(function (e) {
        e.preventDefault();
        var msg="";
        $(this).find('[name]').each(function (index, value) {
            if(msg.length>0){
                return false;
            }
            var required = $(this).attr('data-required');
            var invalid = $(this).attr('data-invalid');

            if (typeof required !== typeof undefined && required !== false) {
                if($(this).val().length==0){
                    msg=$(this).attr("data-required");
                    return;
                }
            }
            if (typeof invalid !== typeof undefined && invalid !== false) {
                if($(this).attr("type")=="email"){
                    if(!validateEmail($(this).val())){
                        msg=$(this).attr("data-invalid");
                        return;
                    }
                }
                else if($(this).attr("type")=="url"){
                    if(!validateUrl($(this).val())){
                        msg=$(this).attr("data-invalid");
                        return;
                    }
                }
            }

        });
        if(msg.length>0){
            $("[data-error]").addClass("error");
            $("[data-error]").removeClass("success");
            showError(msg);
        }
        else{
            var $this = $(this),
                url=$(this).attr('action'),
                method = $(this).attr('method'),
                data = {};

            $this.find('[name]').each(function (index, value) {
                var $this = $(this),
                    name = $this.attr('name'),
                    value = $this.val();
                data[name] = value;
            });
            var ms="";
            $.ajax({
                url: url,
                type: method,
                data: data,
                error: function (comeback) {
                    $("[data-error]").addClass("error");
                    $("[data-error]").removeClass("success");
                    showError("napaka v sistemu")
                },
                success: function (comeback) {
                    $("[data-error]").addClass("success");
                    $("[data-error]").removeClass("error");
                    showError(comeback)
                }
            });
        }

    })
});
function showError(msg){

    $("[data-error-popup]").addClass("open");
    if($("[data-error-popup]").attr("data-error-popup")!=""){
        setTimeout(function () {
            $("[data-error-popup]").removeClass("open");
        }, $("[data-error-popup]").attr("data-error-popup"));
    }

    $("[data-error-text]").text(msg);
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validateUrl(url) {
    var re = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
    return re.test(url);
}