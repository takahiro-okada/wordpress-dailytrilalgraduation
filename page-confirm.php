<?php
/*
Template Name: template-confirm
*/
?>
<?php get_header(); ?>
<main class="main">
  <?php get_template_part('template-parts/top2'); ?>

  <section class="confirm">
    <div class="confirm-inner inner">
      <h2 class="util-ttl">INQUIRY</h2>
      <div class="confirm-container">
        <p class="confirm-txt">
          お問い合わせありがとうございました。<br>メッセージは正常に送信されました。
        </p>
      </div><!-- /.confirm-container -->
    </div><!-- /.confirm-inner -->
  </section><!-- /.confirm -->

  <?php get_template_part('template-parts/schedule'); ?>

  <?php get_footer(); ?>