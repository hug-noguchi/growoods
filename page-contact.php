<?php get_header(); ?>

<style>
  #button_box {
    display: none;
  }
</style>

<div id="contact">
  <div class="heading_ttl">
    <div class="heading_ttl_inn">
      <div class="heading_ttl_box">
        <h1>
          <p class="sub_ttl02_en"><span>CONTACT</span></p>
          <p class="sub_ttl02_ja">お問い合わせ</p>
        </h1>
        <ul class="breadcrumbs">
          <li><a href="/">TOP</a></li>
          <span> > </span>
          <li>CONTACT</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="contact_box">
    <div class="inn contact_inn">
      <p class="contact_lead">
        事業のご相談・ご質問からリクルートに関する事まで、お気軽にお問い合わせください。<br>
        2営業日以内でのご返事を原則と致しますが、それ以上の返信が無き場合は稀にシステムトラブル等からご連絡頂けていない場合もございます。<br>
        その場合はお手数ではありますが再度お電話でのお問い合わせをお願い致します。
      </p>
      <div class="contact_detail">
        <p class="contact_box_txt">お電話でのお問い合わせ</p>
        <a href="tel:0368043136" class="contact_box_tel"><span>03-6804-3136</span></a>
        <div class="contact_box_list">
          <ul>
            <li><span>本社</span>東京都港区六本木7-13-10 Tomasビル2F</li>
            <li><span>Email</span><a href="mailto:info@growoods.jp">info@growoods.jp</a></li>
          </ul>
        </div>
      </div>
      <div class="form">
        <?php
					if (have_posts()) :
						while (have_posts()):
							the_post();
						the_content();

						endwhile;
					endif;
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
