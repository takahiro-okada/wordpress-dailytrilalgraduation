<?php
/*
Template Name: template-cast
*/
?>

<?php get_header(); ?>
<main class="main">
  <?php get_template_part('template-parts/top2'); ?>

  <section class="cast" id="cast">
    <div class="cast-bg">
      <div class="cast-inner inner">
        <h2 class="cast-ttl util-ttl wow fadeInUp">CASTS</h2><!-- /.cast-ttl -->
        <div class="cast-wrapper">
          <!-- 上位３件を表示 -->
          <?php if (get_field('castheader')) : ?>
            <?php while (the_repeater_field('castheader')) : ?>
              <div class="cast-body wow fadeInUp">
                <div class="cast-body-img">
                  <img src="<?php the_sub_field('cast-image'); ?>">
                </div><!-- /.cast-body-img -->
                <div class="cast-body-name">
                  <?php the_sub_field('cast-place'); ?>
                  <span class="cast-body-name-Big">
                    <?php the_sub_field('cast-name'); ?>
                  </span>
                  <span class="cast-body-name-Small">
                    <?php the_sub_field('cast-job'); ?>
                  </span>
                </div><!-- /.cast-body-name -->
                <p class="cast-body-txt">
                  <?php echo nl2br(get_sub_field('cast-comment', false, false)); ?>
                </p><!-- /.cast-body-txt -->
              </div><!-- /.cast-body -->
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div><!-- /.cast-wrapper -->
      </div><!-- /.cast-inner -->
    </div><!-- /.cast-bg -->
  </section>
  <!-- /.cast -->

  <!-- キャスト中 -->
  <section class="cast-single">
    <div class="cast-inner inner">
      <div class="cast-single-wrapper-top">
        <!-- ミュージシャン -->
        <?php if (get_field('castmiddle')) : ?>
          <?php while (the_repeater_field('castmiddle')) : ?>
            <div class="cast-single-body-top wow fadeInUp">
              <div class="cast-body-imgSmall">
                <img src="<?php the_sub_field('cast-image'); ?>">
              </div><!-- /.cast-body-img -->
              <div class="cast__middle__body">
                <div class="cast__middle__name">
                  <div class="cast__middle__name2">
                    <?php the_sub_field('cast-place'); ?>
                    <span class="cast-single-body-name-Big">
                      <?php the_sub_field('cast-name'); ?>
                    </span>
                    <span class="cast-single-body-name-Small">
                      <?php the_sub_field('castjob'); ?>
                    </span>
                  </div><!-- /.cast-body-name -->
                </div>
                <p class="cast-single-body-txt">

                  <?php echo nl2br(get_sub_field('cast-comment', false, false)); ?>
                </p><!-- /.cast-body-txt -->
              </div><!-- /.cast-body -->
            </div><!-- /.cast-single-body -->
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div><!-- /.cast-single-wrapper -->
    </div><!-- /.cast-inner -->
  </section><!-- /.cast-single -->

  <section class="cast__single-bottom">
    <div class=" inner">
      <div class="cast__single-bottom__wrapper">
        <!-- スタッフ -->
        <?php if (get_field('castfooter')) : ?>
          <?php while (the_repeater_field('castfooter')) : ?>
            <div class="cast__single-bottom__body">
              <p class="cast__single-bottom__position">
                <?php the_sub_field('cast-position'); ?>
              </p>
              <p class="cast__single-bottom__name">
                <?php the_sub_field('cast-name'); ?>
              </p>
              <p class="cast__single-bottom__job">
                <?php the_sub_field('cast-job'); ?>
              </p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section><!-- /.cast-singleList -->

  <?php get_template_part('template-parts/schedule') ?>

  <?php get_footer(); ?>