<?php get_header(); ?>

  <div class="logo_fadein">
    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ロゴ"></p>
  </div>

  <div id="fv">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv.jpg" alt="医・食から笑顔を" class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv_sp.jpg" alt="医・食から笑顔を" class="sp">
      <div class="fv_lead bg is-animated">
        <p class="bg-wrap is-animated1"><span class="inn">医・食から</span></p>
        <p class="bg-wrap is-animated2"><span class="inn">笑顔を</span></p>
      </div>
    </div>
  </div>

  <main>

    <section id="about">
      <div class="about_inn">
        <h2 class="fadeIn">
          <span class="sub_ttl"><span>About Us</span></span><br>
          <span class="ttl_en">Growoods</span>とは？
        </h2>
        <p class="about_txt fadeIn">
          「医・食から笑顔を」をモットーに医療機関、飲食店の運営サポート、コンサルティングを行っています。<br>
          また日本が世界に誇るIPと飲食店とのコラボ、グッズ販売などを行っています。<br>
          医・食の充実が日本の未来のためになると信じて、進化し続けます。
        </p>
      </div>
      <div class="about_bg"></div>
      <div class="about_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about02.jpg" alt="about usイメージ画像" class="about_img02 fadeIn">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about01.jpg" alt="about usイメージ画像" class="about_img01 fadeIn">
      </div>
    </section>

    <section id="business">
      <div class="inn business_inn">
        <h2 class="fadeIn">
          <span class="sub_ttl"><span>Our Business</span></span><br>
          事業内容
        </h2>
        <ul class="business_list flex">
          <li class="box fadeIn">
            <a href="/service#service01">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business01.jpg" alt="MS事業部" class="pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business01_sp.jpg" alt="MS事業部" class="sp">
              <h3>MS事業部（メディカルサービス）</h3>
              <p>医療法人の運営サポート、コンサルティング事業、M&A事業</p>
            </a>
          </li>
          <li class="delay-time02 box fadeIn">
            <a href="/service#service02">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business02.jpg" alt="飲食事業部" class="pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business02_sp.jpg" alt="飲食事業部" class="sp">
              <h3>飲食事業部</h3>
              <p>飲食店の運営サポート、スタッフ派遣、コンサルティング事業</p>
            </a>
          </li>
          <li class="delay-time04 box fadeIn">
            <a href="/service#service03">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business03.jpg" alt="IP事業部" class="pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business03_sp.jpg" alt="IP事業部" class="sp">
              <h3>IP事業部</h3>
              <p>IPコンテンツを活用した飲食店の販売促進、認知拡大、マーケティング</p>
            </a>
          </li>
        </ul>
        <div class="business_bg"></div>
      </div>
    </section>

    <section id="shops" class="fadeIn">
      <div class="inn">
        <h2>
          <span class="sub_ttl"><span>Offices and Shops</span></span><br>
          事業所・店舗
        </h2>
        <ul class="shops_list fadeIn">
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/honbu.jpg" alt="医療法人社団爽緑会・千葉爽緑会本部">
            </div>
            <h3>医療法人社団爽緑会・千葉爽緑会本部</h3>
            <p>
              <span>〒106-0032 <br class="sp">東京都港区六本木7-8-7 ハイホーム六本木ビル3階</span><br>
              TEL：03-5843-0151
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shinkoiwa.jpg" alt="ふたば在宅クリニック 新小岩">
            </div>
            <h3>ふたば在宅クリニック 新小岩</h3>
            <p>
              <span>〒124-0024 <br class="sp">東京都葛飾区新小岩1-49-10 第5デリカビル（メディカルタウン新小岩）2階</span><br>
              TEL：03-5879-3530
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kitasenju.jpg" alt="ふたば在宅クリニック 北千住">
            </div>
            <h3>ふたば在宅クリニック 北千住</h3>
            <p>
              <span>〒120-0034 <br class="sp">東京都足立区千住2-4 オカバツインタワービルイースト8階</span><br>
              TEL：03-6806-2590
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="ふたば在宅クリニック 錦糸町">
            </div>
            <h3>ふたば在宅クリニック 錦糸町</h3>
            <p>
              <span>〒130-0013 <br class="sp">東京都墨田区錦糸1-4-14 長嶋ビル4階</span>
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="ふたば在宅クリニック 本八幡">
            </div>
            <h3>ふたば在宅クリニック 本八幡</h3>
            <p>
              準備中</span>
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saitama.jpg" alt="ふたば在宅クリニック 埼玉">
            </div>
            <h3>ふたば在宅クリニック 埼玉</h3>
            <p>
              <span>〒346-0016 <br class="sp">埼玉県久喜市久喜東1-2-5 東山ビル3階-A</span><br>
              TEL：0480-44-9178
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="ふたば在宅クリニック 船橋">
            </div>
            <h3>ふたば在宅クリニック 船橋</h3>
            <p>
              <span>〒274-0063 <br class="sp">千葉県船橋市習志野台2-6-1 小林ビル3F-C</span>
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yachiyo.jpg" alt="ふたば在宅クリニック 八千代">
            </div>
            <h3>ふたば在宅クリニック 八千代</h3>
            <p>
              <span>〒276-0020 <br class="sp">千葉県八千代市勝田台北1-9-1 みかど第2ビル104</span><br>
              TEL：047-409-3677
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sakura.jpg" alt="ふたば在宅クリニック 佐倉">
            </div>
            <h3>ふたば在宅クリニック 佐倉</h3>
            <p>
              <span>〒285-0837 <br class="sp">千葉県佐倉市王子台1-22-13 海祐ビル1階</span><br>
              TEL：043-290-9700
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/symbol.jpg" alt="BAR SYMBOL">
            </div>
            <h3 class="shops_symbol">BAR SYMBOL</h3>
            <p class="shops_symbol_txt">
              <span>〒106-0032 <br class="sp">東京都港区六本木7-18-16 川窪ビル1F</span><br>
              TEL：090-5317-1512
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/redd.jpg" alt="BAR REDD">
            </div>
            <h3>BAR REDD</h3>
            <p>
              <span>〒106-0032 <br class="sp">東京都港区六本木7-13-10 Tomasビル2F</span><br>
              TEL：03-6804-3136
            </p>
          </li>
          <li>
            <div class="shops_image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/redd2.jpg" alt="BAR REDD2">
            </div>
            <h3>BAR REDD2</h3>
            <p>
              <span>〒130-0013 <br class="sp">東京都港区六本木7-14-17 FSビル1F</span><br>
              TEL：03-6804-5804
            </p>
          </li>
        </ul>
        <a href="/develop/" class="btn btn_shops fadeIn">
          <p>事業所・店舗一覧を詳しく見る</p>
        </a>
      </div>
    </section>

    <section id="recruit">
      <div class="recruit_image fadeIn">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit.png" alt="採用情報" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit_sp.png" alt="採用情報" class="sp">
      </div>
      <div class="recruit_box fadeIn">
        <div class="recruit_inn">
          <h2 class="fadeIn">
            <span class="sub_ttl"><span>Recruit</span></span><br>
            採用情報
          </h2>
          <p class="fadeIn">
            この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
          </p>
          <a href="/recruit/" class="btn btn_recruit fadeIn">
            <p>詳しく見る</p>
          </a>
        </div>
      </div>
    </section>

    <section class="slider_shops" class="fadeIn">
      <ul class="slick_shop">
        <li class="floor_01"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/08/slider01.png"></li>
        <li class="floor_02"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/08/slider02.png"></li>
        <li class="floor_03"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/08/slider03.png"></li>
        <li class="floor_04"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/08/slider04.png"></li>
        <li class="floor_05"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/08/slider05.png"></li>
        <li class="floor_06"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/08/slider06.png"></li>
        <li class="floor_07"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/08/slider07.png"></li>
      </ul>
    </section>

<?php get_footer(); ?>
