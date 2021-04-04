<?php
/*
Template Name: template-inquiry
*/
?>
<?php get_header(); ?>

<main class="main">
  <?php get_template_part('template-parts/top2'); ?>

  <section class="inquiry">
    <div class="inquiry-inner inner">
      <h2 class="util-ttl wow fadeInUp">INQUIRY</h2>
      <div class="inquiry-container">
        <div class="inquiry-header wow fadeInUp">
          <p class="inquiry-txt">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br> 公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
        </div><!-- /.inquiry-header -->
        <div class="inquiry-content wow fadeInUp">
          <?php echo do_shortcode('[contact-form-7 id="131" title="コンタクトフォーム"]'); ?>
        </div><!-- /.inquiry-content -->
      </div><!-- /.inquiry-container -->
    </div><!-- /.inquiry-inner -->
  </section><!-- /.inquiry -->

  <?php get_template_part('template-parts/schedule'); ?>

  <?php get_footer(); ?>