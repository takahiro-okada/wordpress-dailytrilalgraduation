<?php
/*
Template Name: template-story
*/
?>

<?php get_header(); ?>
<main class="main">
  <section class="story__heading" id="top">
    <div class="inner story__heading__inner">
      <div class="top2-inner">
        <h1 class="top2-header"><img src="<?php echo get_template_directory_uri() ?>/img/topttl.png" alt="完全版マハーバーラタ"></h1><!-- /.top-header -->
        <div class="top2-footer">
          <img src="<?php echo get_template_directory_uri() ?>/img/topsub.png" alt="">
        </div>
      </div>
      <div class="top2-button">
        <a href="" class="util-button_sub">チケット予約サイトへ</a>
      </div>

      <div class="breadcrumb">
        <?php if (!(is_home() || is_front_page())) : ?>
          <div class="breadcrumb-area">
            <?php
            if (function_exists('bcn_display')) {
              bcn_display();
            }
            ?>
          </div>
        <?php endif; ?>
      </div>

      <h2 class="util-ttl _story">STORY</h2>
      <div class="story__heading__wrapper">
        <h3 class="story__heading__title">
          小見出し
        </h3>
        <div class="story__heading__text">
          マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
          世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
        </div>
      </div>
    </div>
  </section>

  <section class="story__main">
    <?php if (get_field('story')) : ?>
      <?php while (the_repeater_field('story')) : ?>
        <div class="story__main__wrapper" style="background-image:url(<?php the_sub_field('story-image'); ?>);">
          <div class="inner">
            <p class="story__main__text">
              <!-- <?php the_sub_field('story-text'); ?> -->
              <?php echo nl2br(get_sub_field('story-text', false, false)); ?>
            </p>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    </div>
    </div>
  </section>




  <?php get_template_part('template-parts/schedule'); ?>

  <?php get_footer(); ?>