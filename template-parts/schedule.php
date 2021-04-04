<section class="schedule" id="schedule">
  <div class="schedule-inner inner">
    <div class="schedule-wrapper">
      <h2 class="schedule-ttl util-ttl wow fadeInUp">SCHEDULE</h2><!-- /.schedule-ttl -->
      <!-- ここからカスタムフィールド -->
      <div class="schedule-list wow fadeInUp">
        <?php if (get_field('schedule', 49)) : ?>
          <?php while (the_repeater_field('schedule', 49)) : ?>
            <div class="schedule-item">
              <div class="schedule-info-meta">
                <time class="schedule-info--published" datetime="">
                  <?php the_sub_field('date'); ?>
                </time>
                <div class="schedule-info-open">
                  <?php the_sub_field('time'); ?>
                </div>
                <div class="schedule-info-place">
                  <?php the_sub_field('place'); ?>
                </div>
                <div class="schedule-info-link"><a href=<?php the_sub_field('link'); ?>>
                    <?php the_sub_field('link-text'); ?>
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="schedule-footer">
      <div class="schedule-button-left">
        <a href="<?php echo home_url('/inquiry'); ?>" class="util-button_big">お問い合わせはこちら</a>
      </div>
      <div class="schedule-button-right">
        <a href="" class="util-button_big">チケット予約サイトへ</a>
      </div>
    </div>
  </div>
</section><!-- /.schedule -->