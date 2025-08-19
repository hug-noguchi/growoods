<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php if ( is_page('service') ) : ?>
  <title>事業内容｜株式会社Growoods</title>
  <meta name="description" content="MS事業部（メディカルサービス）医療法人の運営サポート、コンサルティング事業、M&A事業、開業支援、飲食事業部飲食店の運営サポート、スタッフ派遣、コンサルティング事業、IP事業部IPコンテンツを活用した飲食店の販売促進、認知拡大、マーケティング">
  <?php elseif ( is_page('develop') ) : ?>
  <title>事務所・店舗｜株式会社Growoods</title>
  <meta name="description" content=" MS事業部（メディカルサービス）ふたば在宅クリニック六本木本部、錦糸町院、新小岩院、北千住院、埼玉院、北習志野院、佐倉院、八千代院、本八幡院。飲食事業部 dining bar REDD、dining bar REDD2、BAR Symbol">
  <?php elseif ( is_page('recruit') ) : ?>
  <title>採用情報｜株式会社Growoods</title>
  <meta name="description" content="わたしたちは、「医・食から笑顔を」を掲げ、医療機関や飲食店を支えるサポート・コンサルティングをはじめ、IP事業など、多彩な取り組みを展開しています。医療と食の充実こそが、日本の未来を育むと信じ、常に進化を続けています。今、そんな私たちのビジョンに共鳴し、新たな価値を共に生み出す仲間を求めています。">
  <?php elseif ( is_page('company') ) : ?>
  <title>会社概要｜株式会社Growoods</title>
  <meta name="description" content="「医・食から笑顔を」人が生きていく上で欠かせない「医・食」その充実が日本の未来のためになると信じて、進化し続けます。">
  <?php elseif ( is_page(array('contact','confirm','thanks')) ) : ?>
  <title>お問い合わせ｜株式会社Growoods</title>
  <meta name="description" content="事業のご相談・ご質問からリクルートに関する事まで、お気軽にお問い合わせください。2営業日以内でのご返事を原則と致しますが、それ以上の返信が無き場合は稀にシステムトラブル等からご連絡頂けていない場合もございます。その場合はお手数ではありますが再度お電話でのお問い合わせをお願い致します。">
  <?php else : ?>
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="人が生きていく上で欠かせない「医・食」その充実が日本の未来のためになると信じて、常に進化し続けます。社名のGrowoodsには、小さな芽が大きな森に育つように、「Grow-Woods」という願いが込められています。">
  <?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
  <link rel=”icon” type=/images/svg href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/slick-theme.css">
  <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css?<?php echo date('YmdHis'); ?>">
  <?php if ( is_page(array("service")) ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/service.css<?php echo '?' .filemtime( get_template_directory() . '/assets/styles/service.css'); ?>">
  <?php elseif ( is_page("develop") ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/develop.css<?php echo '?' .filemtime( get_template_directory() . '/assets/styles/develop.css'); ?>">
  <?php elseif ( is_page("recruit") ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/recruit.css<?php echo '?' .filemtime( get_template_directory() . '/assets/styles/recruit.css'); ?>">
  <?php elseif ( is_page("company") ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/company.css?v=<?php echo filemtime( get_template_directory() . '/assets/styles/company.css'); ?>">
  <?php elseif ( is_page(array("contact", "confirm", "thanks")) ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/contact.css?v=<?php echo filemtime( get_template_directory() . '/assets/styles/contact.css'); ?>">
  <?php endif; ?>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <?php wp_head(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slider.js"></script>
</head>

<body>
  <div class="hd_box">
    <header>
      <div class="hd">
        <div class="hd_logo">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ロゴGrowoods">
          </a>
        </div>
        <nav class="pc">
          <ul class="hd_navi">
            <li><a href="/">TOP</a></li>
            <li><a href="/service/">SERVICE</a></li>
            <li><a href="/develop/">DEVELOP</a></li>
            <li><a href="/recruit/">RECRUIT</a></li>
            <li><a href="/company/">COMPANY</a></li>
            <li><a href="/contact/">CONTACT</a></li>
          </ul>
        </nav>
        <div class="outer-menu sp">
          <input class="checkbox-toggle" type="checkbox" />
          <div class="hamburger">
            <div></div>
          </div>
          <div class="menu">
            <div>
              <div>
                <ul>
                  <li><a href="/">TOP</a></li>
                  <li><a href="/service/">SERVICE</a></li>
                  <li><a href="/develop/">DEVELOP</a></li>
                  <li><a href="/recruit/">RECRUIT</a></li>
                  <li><a href="/company/">COMPANY</a></li>
                  <li><a href="/contact/">CONTACT</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
