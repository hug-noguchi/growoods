$(window).on("load", function () {
  /* hamburger
	-------------------------------------------------- */
  $("#hamburger").on("click", function () {
    $(this).toggleClass("js_active");
    $("#header").toggleClass("js_active");
    $("#navigation").fadeToggle();
  });

  /* banner_kids
	-------------------------------------------------- */
  $("#banner_kids").on("click", function () {
    $("#banner_kids_modal").fadeToggle();
  });
  $("#banner_kids_close").on("click", function () {
    $("#banner_kids_modal").fadeToggle();
  });

  /* anchorLink
	-------------------------------------------------- */
  // $('a[href^="#"]').on('click', function () {
  // 	var speed = 500;
  // 	var href= $(this).attr('href');
  // 	var target = $(href == '#' || href == '' ? 'html' : href);
  // 	var position = target.offset().top;
  // 	$('html, body').animate({scrollTop:position}, speed, 'swing');
  // 	return false;
  // });

  /* animation
	-------------------------------------------------- */
  var windowHeight = $(window).height();
  var scroll = $(window).scrollTop();

  /* header navigation
	-------------------------------------------------- */
  if (scroll > 320) {
    $("#header").addClass("js_scroll");
  } else {
    $("#header").removeClass("js_scroll");
  }

  /* animation_fadeIn
	-------------------------------------------------- */
  $(".c_animation_fadeIn").each(function () {
    var objectPosition = $(this).offset().top;
    if (scroll > objectPosition - windowHeight + 100) {
      $(this).addClass("js_active");
    }
  });

  /* animation_splitObject
	-------------------------------------------------- */
  $(".c_animation_splitObject").each(function () {
    var objectArray = $(this).children();
    var delay = "";
    $.each(objectArray, function (index) {
      delay = index / 5 + "s";
      $(this).css("animation-delay", delay);
    });
    var objectPosition = $(this).offset().top;
    if (scroll > objectPosition - windowHeight + 100) {
      $(this).addClass("js_active");
    }
  });

  /* animation_splitText
	-------------------------------------------------- */
  $(".c_animation_splitText").each(function () {
    var splitText = $(this);
    splitText.contents().each(function (_, node) {
      node.parentNode.removeChild(node);
      switch (node.nodeType) {
        case Node.TEXT_NODE:
          var textArray = node.textContent.split("");
          textArray.forEach(function (text) {
            splitText.append("<span>" + text + "</span>");
          });
          break;
        default:
          splitText.append(node);
      }
    });
    $(this)
      .children("span")
      .each(function (index) {
        $(this).css({
          animationDelay: index * 0.05 + "s",
        });
      });
    var objectPosition = $(this).offset().top;
    if (scroll > objectPosition - windowHeight + 100) {
      $(this).addClass("js_active");
    }
  });

  /* load
	-------------------------------------------------- */
  $("#load").addClass("js_end");

  /* hero
	-------------------------------------------------- */
  $("#hero").addClass("js_active");

  /* banner_kids
	-------------------------------------------------- */
  $("#banner_kids").addClass("js_active");

  /* scroll
	-------------------------------------------------- */
  $(window).on("scroll", function () {
    /*
		-------------------------------------------------- */
    var windowHeight = $(window).height();
    var scroll = $(window).scrollTop();

    /* header navigation
		-------------------------------------------------- */
    if (scroll > windowHeight / 2) {
      $("#header").addClass("js_scroll");
    } else {
      $("#header").removeClass("js_scroll");
    }

    /* animation_fadeIn
		-------------------------------------------------- */
    $(".c_animation_fadeIn").each(function () {
      var objectPosition = $(this).offset().top;
      if (scroll > objectPosition - windowHeight + 100) {
        $(this).addClass("js_active");
      }
    });

    /* animation_splitObject
		-------------------------------------------------- */
    $(".c_animation_splitObject").each(function () {
      var objectPosition = $(this).offset().top;
      if (scroll > objectPosition - windowHeight + 100) {
        $(this).addClass("js_active");
      }
    });

    /* animation_splitText
		-------------------------------------------------- */
    $(".c_animation_splitText").each(function () {
      var objectPosition = $(this).offset().top;
      if (scroll > objectPosition - windowHeight + 100) {
        $(this).addClass("js_active");
      }
    });

    /*
		-------------------------------------------------- */
    $("#hero").addClass("js_loaded");
    $("#pageHeader").addClass("js_loaded");
  });
});

$(function () {
  setTimeout(function () {
    $(".logo_fadein p").fadeIn(1000);
  }, 500);
  setTimeout(function () {
    $(".logo_fadein").fadeOut(1000);
  }, 2500);
});
