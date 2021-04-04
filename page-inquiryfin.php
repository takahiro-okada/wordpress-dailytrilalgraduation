<?php
/*
Template Name: template-inquiryfin
*/
?>
<?php get_header(); ?>

<main class="main">
  <?php get_template_part('template-parts/top2'); ?>

  <section class="inquiry">
    <div class="inquiry-inner inner">
      <h2 class="util-ttl">INQUIRY</h2>
      <div class="inquiry-container">
        <div class="inquiry-header">
          <p class="inquiryfin-txt">お問い合わせありがとうございました。<br>メッセージは正常に送信されました。</p>
        </div><!-- /.inquiry-header -->
      </div><!-- /.inquiry-container -->
    </div><!-- /.inquiry-inner -->
  </section><!-- /.inquiry -->

  <?php get_template_part('template-parts/pick_by_tag'); ?>

  <?php get_template_part('template-parts/schedule'); ?>

  <?php get_footer(); ?>