<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="Growoods">
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
