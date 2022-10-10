"use strict";

(function ($) {
  /*------------------
        Preloader
    --------------------*/
  $(window).on("load", function () {
    $(".loader").fadeOut();
    $("#preloder").delay(200).fadeOut("slow");
  });

  /*------------------
        Background Set
    --------------------*/
  $(".set-bg").each(function () {
    var bg = $(this).data("setbg");
    $(this).css("background-image", "url(" + bg + ")");
  });

  $(".canvas-open").on("click", function () {
    $(".offcanvas-menu-wrapper").addClass("show-offcanvas-menu-wrapper");
    $(".offcanvas-menu-overlay").addClass("active");
  });

  $(".canvas-close, .offcanvas-menu-overlay").on("click", function () {
    $(".offcanvas-menu-wrapper").removeClass("show-offcanvas-menu-wrapper");
    $(".offcanvas-menu-overlay").removeClass("active");
  });

  // Search model
  $(".search-switch").on("click", function () {
    $(".search-model").fadeIn(400);
  });

  $(".search-close-switch").on("click", function () {
    $(".search-model").fadeOut(400, function () {
      $("#search-input").val("");
    });
  });

  /*------------------
		Navigation
	--------------------*/
  $(".mobile-menu").slicknav({
    prependTo: "#mobile-menu-wrap",
    allowParentLinks: true,
  });

  /*------------------
        News Slider
    --------------------*/
  $(".news-slider").owlCarousel({
    loop: true,
    nav: true,
    items: 1,
    dots: false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>',
    ],
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
    mouseDrag: false,
  });

  /*------------------------
		Video Slider
    ----------------------- */
  $(".video-slider").owlCarousel({
    items: 4,
    dots: false,
    autoplay: false,
    margin: 0,
    loop: true,
    smartSpeed: 1200,
    nav: true,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });

  /*------------------
        Magnific Popup
    --------------------*/
  $(".video-popup").magnificPopup({
    type: "iframe",
  });

  
})(jQuery);

$(document).ready(() => {
  const textarea = $("#message");
  const send = $(".send");
  const photo = $(".photo");

  $("body").on("contextmenu", ".blue-tick", function (e) {
    return false;
  });

  photo.show();
  send.hide();

  textarea
    .on("input keydown keyup", function () {
      textarea.height(0).height(this.scrollHeight);
      if (textarea.val().trim().length > 0) {
        send.show();
        photo.hide();
      } else {
        send.hide();
        photo.show();
      }
    })
    .find(textarea)
    .change();

  $(".person").click(() => {
    textarea.focus();
  });

  function add() {
    var message = textarea.val().trim();
    $(".messages").append(
      "<div class='clip sent'><div class='text'>" + message + "</div></div>"
    );
    $(".content").html(
      "<div class='message'> <b>You :</b> " + message + "</div>"
    );
    textarea.val("");
    send.hide();
    photo.show();

    textarea.focus();
    textarea.height("");
  }

  send.click(() => {
    add();
  });

  textarea.on("keydown", (event) => {
    if (event.keyCode == 13 && !event.shiftKey) {
      if (textarea.val().trim().length > 0) {
        send.removeAttr("disabled");
        add();
      }
      event.preventDefault();
    }
  });
});

