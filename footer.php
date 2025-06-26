</main>
<footer>
  <div class="ft_bg"></div>
  <div class="inn">
    <div class="ft_left pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ロゴGrowoods">
      <div class="company_detail">
        <p class="name">株式会社Growoods</p>
        <p class="address">
          <span>〒106-0032<br>
          東京都港区六本木7-8-7 ハイホーム六本木ビル 3階
        </p>
        <p class="tel">TEL.<span>03-5843-0151</span></p>
      </div>
      <div class="company_detail honsha_address">
        <div class="company_detail_left">
          <p class="name">本社所在地</p>
          <p class="address">
            <span>〒106-0032<br>
            東京都港区六本木7-3-10 Tomasビル201
          </p>
        </div>
      </div>
      <ul class="ft_navi">
        <li><a href="/">TOP</a></li>
        <li><a href="/service/">SERVICE</a></li>
        <li><a href="/develop/">DEVELOP</a></li>
        <li><a href="/recruit/">RECRUIT</a></li>
        <li><a href="/company/">COMPANY</a></li>
        <li><a href="/contact/">CONTACT</a></li>
      </ul>
      <p class="copy pc">© <?php echo date("Y"); ?> Growoods Inc.</p>
    </div>
    <div class="ft_left sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ロゴGrowoods">
      <div class="company_detail">
        <div class="company_detail_left">
          <p class="name">株式会社Growoods</p>
          <p class="address">
            <span>〒106-0032<br>
            東京都港区六本木<br>7-8-7 ハイホーム六本木ビル3階
          </p>
          <p class="tel">TEL.<span>03-5843-0151</span></p>
        </div>
        <div class="company_detail_left">
          <p class="name">本社所在地</p>
          <p class="address">
            <span>〒106-0032<br>
            東京都港区六本木<br>7-3-10 Tomasビル201
          </p>
        </div>
        <div class="googlemap sp">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12965.95577120964!2d139.729971!3d35.664961!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b61fc59b317%3A0x55e3e0c356ad0036!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1725517317667!5m2!1sja!2sjp" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <ul class="ft_navi">
        <li><a href="/">TOP</a></li>
        <li><a href="/service/">SERVICE</a></li>
        <li><a href="/develop/">DEVELOP</a></li>
        <li><a href="/recruit/">RECRUIT</a></li>
        <li><a href="/company/">COMPANY</a></li>
        <li><a href="/contact/">CONTACT</a></li>
      </ul>
    </div>
    <div class="googlemap pc">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6482.977885431033!2d139.72510575376498!3d35.6649610021402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b61fc59b317%3A0x55e3e0c356ad0036!2z44G144Gf44Gw5Zyo5a6F44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1724907114842!5m2!1sja!2sjp" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <p class="copy sp">© <?php echo date("Y"); ?> Growoods Inc.</p>
  </div>
</footer>
<?php wp_footer(); ?>

<script>
  $(window).scroll(function () {
      let scrollValue;

      if ($(window).width() > 480) {
          scrollValue = 903;
      } else if ($(window).width() <= 480) {
          scrollValue = 818;
      }

      if($(window).scrollTop() > scrollValue) {
          $('header .hd').addClass('fixed');
      } else {
          $('header .hd').removeClass('fixed');
      }
  });

  let targets = document.querySelectorAll('#business .box');

  // アニメーション
  let spWindow = 559;
  let windowWidth = document.documentElement.clientWidth;

  if (windowWidth <= spWindow) {
    // 画面サイズ559以下
    $(window).on('scroll', function () {
      $('.fadeIn').each(function () {
        var elemPos = $(this).offset().top,
          scroll = $(window).scrollTop(),
          windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 120) {
          $(this).addClass('scrollIn');
        }
      });
    });
  } else {
    // 画面サイズ960以上
    $(window).on('scroll', function () {
      $('.fadeIn').each(function () {
        var elemPos = $(this).offset().top,
          scroll = $(window).scrollTop(),
          windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200) {
          $(this).addClass('scrollIn');
        }
      });
    });
  }
</script>
</body>
</html>
