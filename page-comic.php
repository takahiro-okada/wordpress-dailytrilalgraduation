<?php
/*
Template Name: template-comic
*/
?>

<?php get_header(); ?>
<main class="main">
  <?php get_template_part('template-parts/top2'); ?>
  <section class="comic" id="comic">
    <div class="comic-inner inner">
      <h2 class="comic-ttl util-ttl">COMIC</h2><!-- /.comics-ttl -->
      <p class="comic-ttlBelow">マンガでわかるマハーバーラタ</p><!-- /.comics-ttlBelow -->
      <div class="comic-content">
        <!-- /.comics-content-ttl -->
        <p class="comic-content-txt">日本ではあまり馴染みのないマハーバーラタ。ここではまだマハーバーラタについて詳しく知らない方向けに、マンガでわかりやすく解説していきます。</p><!-- /.comics-content-txt -->
      </div><!-- /.comics-content -->
      <div class="comic-embedded">
        <?php echo do_shortcode('[instagram-feed]'); ?>
      </div><!-- /.comic-embedded -->
    </div><!-- /.comic-inner -->
  </section><!-- /.comic -->

  <?php get_template_part('template-parts/schedule'); ?>

  <?php get_footer(); ?>