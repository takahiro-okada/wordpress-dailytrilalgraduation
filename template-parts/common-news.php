<section class="news" id="news">
<div class="news-inner inner">
<h2 class="news-ttl util-ttl wow fadeInUp">NEWS</h2>
<div class="common-news-button"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="util-button_small">ニュース一覧へ</a></div>

<div class="common-news__list wow fadeInUp">
<?php
$args = array(
'post_type' => 'post',
'posts_per_page' => 5,
'no_found_rows' => true,  //ページャーを使う時はfalseに。
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
while ($the_query->have_posts()) : $the_query->the_post();
?>
<div class="common-news__item">
<a class="common-news__link" href="<?php the_permalink(); ?>">
  <div class="common-news__image">
    <?php
if (has_post_thumbnail($id)) {
  echo get_the_post_thumbnail($id, 'large');
} else {
  echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
}
?>
</div>
<div class="common-news-body">
  <div class="common-news-date"><?php the_time('Y.m.d'); ?></div>
  <div class="common-news-disc">
    <?php the_title()?></div>
  </div>
</a>
</div>
<?
endwhile;
endif;
wp_reset_postdata();
?>
</div>
</div>
</section>