<?php get_header(); ?>

<main class="main">
  <?php get_template_part('template-parts/top2'); ?>
  <!-- news2 -->
  <section class="news2" id="news">
    <div class="news-inner inner">
      <h2 class="news-ttl util-ttl wow fadeInUp">NEWS</h2><!-- /.news-ttl -->
      <?php
      //記事があればentriesブロック以下を表示
      if (have_posts()) : ?>
        <div class="news-list2">
          <?php
          //記事数ぶんループ
          while (have_posts()) :
            the_post(); ?>
            <div class="news-item2 wow fadeInUp"><a href="<?php the_permalink(); ?>">
                <div class="news-card-pic2">
                  <?php
                  if (has_post_thumbnail()) {
                    // アイキャッチ画像が設定されてれば大サイズで表示
                    the_post_thumbnail('large');
                  } else {
                    // なければnoimage画像をデフォルトで表示
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                  }
                  ?>
                </div>
                <div class="news-body2">
                  <div class="news-date2"><?php the_time('Y.m.d'); ?></div><!-- /.news-date -->
                  <div class="news-disc2"><?php the_title(); ?></div><!-- /.news-disc -->
                </div><!-- /.news-body -->
              </a></div><!-- /.news-item -->
          <?php endwhile; ?>
        </div><!-- /.news-items -->
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div><!-- /.news-items -->

    <!-- pagenation -->
    <?php if (paginate_links()) :
    ?>
      <!-- pagenation -->
      <div class="pagenation wow fadeInUp">
        <?php wp_pagenavi(); ?>
      </div><!-- /pagenation -->
    <?php endif; ?>
  </section>

  <?php get_template_part('template-parts/schedule'); ?>

  <?php get_footer(); ?>