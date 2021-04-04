<section class="top2" id="top">
  <div class="inner top2-inner wow fadeIn">
    <h1 class="top2-header"><img src="<?php echo get_template_directory_uri() ?>/img/topttl.png" alt="完全版マハーバーラタ"></h1><!-- /.top-header -->
    <div class="top2-footer">
      <img src="<?php echo get_template_directory_uri() ?>/img/topsub.png" alt="">
    </div><!-- /.top-footer -->
  </div><!-- /.top-inner -->
</section>
<!-- /.top -->
<div class="inner">
  <div class="top2-button">
    <a href="" class="util-button_sub">チケット予約サイトへ</a>
  </div><!-- /.top-button -->
</div><!-- /.inner -->
<div class="inner breadcrumb">
  <?php if (!(is_home() || is_front_page())) : ?>
    <div class="breadcrumb-area">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
  <?php endif; ?>
</div><!-- /.inner -->