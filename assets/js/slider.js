$(function () {
  $(".slider_shops .slick_shop").slick({
    autoplay: true, //自動でスクロール
    autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
    speed: 5000, //スライドが流れる速度を設定
    cssEase: "linear", //スライドの流れ方を等速に設定
    slidesToShow: 4, //表示するスライドの数
    arrows: false, //矢印非表示
    swipe: true,
    swipeToSlide: true,
    touchMove: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,

    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3, // モバイルで3枚表示
        },
      },
    ],
  });
});

$(function () {
  $(".slider_service").slick({
    autoplay: true,
    dots: true,
  });
});
