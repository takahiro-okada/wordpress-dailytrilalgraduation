<?php
/*
Template Name: template-comments
*/
?>

<?php get_header(); ?>


    <main class="main">
    <?php get_template_part('template-parts/top2'); ?>

      <section class="comment" id="comment">
        <div class="comment-inner inner">
          <h2 class="comment-ttl util-ttl wow fadeInUp">COMMENTS</h2><!-- /.comments-ttl -->
          <p class="comment-ttlBelow wow fadeInUp">舞台関係者のみならず各界著名人からコメントが届いています！</p><!-- /.comments-ttlBelow -->
          <div class="comment-content wow fadeInUp">
            <p class="comment-content-ttl">京都佛立ミュージアム館長<span class="comment-content-ttl-Em">長松清潤</span></p>
            <!-- /.comments-content-ttl -->
            <p class="comment-content-txt">「文に非ず、其の義に非ず、唯だ一部の意のみ。」
              まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p><!-- /.comments-content-txt -->
            <div class="comment-button">
              <a href="" class="util-button_small">もっと詳しく</a>
            </div><!-- /.comment-button -->
          </div><!-- /.comments-content -->
        </div><!-- /.comment-inner -->
      </section><!-- /.comment -->

      <section class="comment-archive">
        <div class="comment-archive-inner inner">
          <div class="comment-archive-items">
          <?php if (get_field('comments')) : ?>
          <?php while (the_repeater_field('comments')) : ?>
            <div class="comment-archive-item wow fadeInUp">
              <div class="comment-archive-header">
                <p class="comment-archive-name">
                <?php the_sub_field('comments-name'); ?>
                </p>
                <p class="comment-archive-sub">
                <?php the_sub_field('comments-job'); ?>
                </p>
              </div><!-- /.comment-archive-header -->
              <p class="comment-archive-main">
              <?php the_sub_field('comments-content'); ?>
              </p>
            </div><!-- /.comment-archive-item -->
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </div><!-- /.comment-archive-inner -->
      </section><!-- /.comment-archive -->
      <?php get_template_part('template-parts/schedule'); ?>
      <?php get_footer(); ?>
