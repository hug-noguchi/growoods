<?php get_header(); ?>

<style>
  #button_move {
    display: none;
  }
</style>

<div id="contact_confirm">
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
        入力内容をご確認の上、「送信する」ボタンをクリックしてください。
      </p>
      <div class="form contact_confirm">
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

<script>
  jQuery(document).ready(function($) {
    $('input.tel').attr('placeholder', '080-1234-1234');
});

</script>
