// $(window).on("load",function(){"use strict";$(".post_project").on("click",function(){$(".post-popup.pst-pj").addClass("active");$(".wrapper").addClass("overlay");return false;});$(".post-project > a").on("click",function(){$(".post-popup.pst-pj").removeClass("active");$(".wrapper").removeClass("overlay");return false;});$(".post-jb").on("click",function(){$(".post-popup.job_post").addClass("active");$(".wrapper").addClass("overlay");return false;});$(".post-project > a").on("click",function(){$(".post-popup.job_post").removeClass("active");$(".wrapper").removeClass("overlay");return false;});$('.sign-control li').on("click",function(){var tab_id=$(this).attr('data-tab');$('.sign-control li').removeClass('current');$('.sign_in_sec').removeClass('current');$(this).addClass('current animated fadeIn');$("#"+tab_id).addClass('current animated fadeIn');return false;});$('.signup-tab ul li').on("click",function(){var tab_id=$(this).attr('data-tab');$('.signup-tab ul li').removeClass('current');$('.dff-tab').removeClass('current');$(this).addClass('current animated fadeIn');$("#"+tab_id).addClass('current animated fadeIn');return false;});$('.tab-feed ul li').on("click",function(){var tab_id=$(this).attr('data-tab');$('.tab-feed ul li').removeClass('active');$('.product-feed-tab').removeClass('current');$(this).addClass('active animated fadeIn');$("#"+tab_id).addClass('current animated fadeIn');return false;});var gap=$(".container").offset().left;$(".cover-sec > a, .chatbox-list").css({"right":gap});$(".overview-open").on("click",function(){$("#overview-box").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#overview-box").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".exp-bx-open").on("click",function(){$("#experience-box").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#experience-box").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".ed-box-open").on("click",function(){$("#education-box").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#education-box").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".lct-box-open").on("click",function(){$("#location-box").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#location-box").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".skills-open").on("click",function(){$("#skills-box").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#skills-box").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".esp-bx-open").on("click",function(){$("#establish-box").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#establish-box").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".portfolio-btn > a").on("click",function(){$("#create-portfolio").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#create-portfolio").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".emp-open").on("click",function(){$("#total-employes").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#total-employes").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".ask-question").on("click",function(){$("#question-box").addClass("open");$(".wrapper").addClass("overlay");return false;});$(".close-box").on("click",function(){$("#question-box").removeClass("open");$(".wrapper").removeClass("overlay");return false;});$(".chat-mg").on("click",function(){$(this).next(".conversation-box").toggleClass("active");return false;});$(".close-chat").on("click",function(){$(".conversation-box").removeClass("active");return false;});$(".ed-opts-open").on("click",function(){$(this).next(".ed-options").toggleClass("active");return false;});$(".menu-btn > a").on("click",function(){$("nav").toggleClass("active");return false;});$(".not-box-open").on("click",function(){$("#message").hide();$(".user-account-settingss").hide();$(this).next("#notification").toggle();});$(".not-box-openm").on("click",function(){$("#notification").hide();$(".user-account-settingss").hide();$(this).next("#message").toggle();});$(".user-info").click(function(){$(".user-account-settingss").slideToggle("fast");$("#message").not($(this).next("#message")).slideUp();$("#notification").not($(this).next("#notification")).slideUp();});$(".forum-links-btn > a").on("click",function(){$(".forum-links").toggleClass("active");return false;});$("html").on("click",function(){$(".forum-links").removeClass("active");});$(".forum-links-btn > a, .forum-links").on("click",function(){e.stopPropagation();});$('.profiles-slider').slick({slidesToShow:3,slck:true,slidesToScroll:1,prevArrow:'<span class="slick-previous"></span>',nextArrow:'<span class="slick-nexti"></span>',autoplay:true,dots:false,autoplaySpeed:2000,responsive:[{breakpoint:1200,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,dots:false}},{breakpoint:991,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1}}]});});


$(window).on("load", function () {
    "use strict";
    $(".post_project").on("click", function () {
        $(".post-popup.pst-pj").addClass("active");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".post-project > a").on("click", function () {
        $(".post-popup.pst-pj").removeClass("active");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".post-jb").on("click", function () {
        $(".post-popup.job_post").addClass("active");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".post-project > a").on("click", function () {
        $(".post-popup.job_post").removeClass("active");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".sign-control li").on("click", function () {
        var tab_id = $(this).attr("data-tab");
        $(".sign-control li").removeClass("current");
        $(".sign_in_sec").removeClass("current");
        $(this).addClass("current animated fadeIn");
        $("#" + tab_id).addClass("current animated fadeIn");
        return false;
    });
    $(".signup-tab ul li").on("click", function () {
        var tab_id = $(this).attr("data-tab");
        $(".signup-tab ul li").removeClass("current");
        $(".dff-tab").removeClass("current");
        $(this).addClass("current animated fadeIn");
        $("#" + tab_id).addClass("current animated fadeIn");
        return false;
    });
    $(".tab-feed ul li").on("click", function () {
        var tab_id = $(this).attr("data-tab");
        $(".tab-feed ul li").removeClass("active");
        $(".product-feed-tab").removeClass("current");
        $(this).addClass("active animated fadeIn");
        $("#" + tab_id).addClass("current animated fadeIn");
        return false;
    });
    var gap = $(".container").offset().left;
    $(".cover-sec > a, .chatbox-list").css({ right: gap });
    $(".overview-open").on("click", function () {
        $("#overview-box").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#overview-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".exp-bx-open").on("click", function () {
        $("#experience-box").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#experience-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".ed-box-open").on("click", function () {
        $("#education-box").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#education-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".lct-box-open").on("click", function () {
        $("#location-box").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#location-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".skills-open").on("click", function () {
        $("#skills-box").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#skills-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".esp-bx-open").on("click", function () {
        $("#establish-box").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#establish-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".portfolio-btn > a").on("click", function () {
        $("#create-portfolio").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#create-portfolio").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".emp-open").on("click", function () {
        $("#total-employes").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#total-employes").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".ask-question").on("click", function () {
        $("#question-box").addClass("open");
        $(".wrapper").addClass("overlay");
        return false;
    });
    $(".close-box").on("click", function () {
        $("#question-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;
    });
    $(".chat-mg").on("click", function () {
        $(this).next(".conversation-box").toggleClass("active");
        return false;
    });
    $(".close-chat").on("click", function () {
        $(".conversation-box").removeClass("active");
        return false;
    });
    $(".ed-opts-open").on("click", function () {
        $(this).next(".ed-options").toggleClass("active");
        return false;
    });
    $(".menu-btn > a").on("click", function () {
        $("nav").toggleClass("active");
        return false;
    });
    $(".not-box-open").on("click", function () {
        $("#message").hide();
        $(".user-account-settingss").hide();
        $(this).next("#notification").toggle();
    });
    $(".not-box-openm").on("click", function () {
        $("#notification").hide();
        $(".user-account-settingss").hide();
        $(this).next("#message").toggle();
    });
    $(".user-info").click(function () {
        $(".user-account-settingss").slideToggle("fast");
        $("#message").not($(this).next("#message")).slideUp();
        $("#notification").not($(this).next("#notification")).slideUp();
    });
    $(".forum-links-btn > a").on("click", function () {
        $(".forum-links").toggleClass("active");
        return false;
    });
    $("html").on("click", function () {
        $(".forum-links").removeClass("active");
    });
    $(".forum-links-btn > a, .forum-links").on("click", function () {
        e.stopPropagation();
    });
    $(".profiles-slider").slick({
        slidesToShow: 3,
        slck: true,
        slidesToScroll: 1,
        prevArrow: '<span class="slick-previous"></span>',
        nextArrow: '<span class="slick-nexti"></span>',
        autoplay: true,
        dots: false,
        autoplaySpeed: 2000,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 2, slidesToScroll: 1, infinite: true, dots: false } },
            { breakpoint: 991, settings: { slidesToShow: 2, slidesToScroll: 2 } },
            { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        ],
    });
    $(".ads-profileWrap").slick({
        slidesToShow: 1,
        slck: true,
        slidesToScroll: 1,
        prevArrow: '<span class="slick-previous"></span>',
        nextArrow: '<span class="slick-nexti"></span>',
        autoplay: true,
        dots: false,
        autoplaySpeed: 2000,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 2, slidesToScroll: 1, infinite: true, dots: false } },
            { breakpoint: 991, settings: { slidesToShow: 2, slidesToScroll: 2 } },
            { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        ],
    });
    $(".consLenseSeeRight").mouseover(function() {
      $(".drpMenuAct").show();
    });
});
