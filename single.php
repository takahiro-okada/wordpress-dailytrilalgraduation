<?php get_header(); ?>

    <main class="main">

    <?php get_template_part('template-parts/top2'); ?>

      <!-- newssingle -->
      <section class="news-single" id="news">
        <div class="news-single-inner inner">
          <h2 class="news-single-ttl util-ttl wow fadeInUp">NEWS</h2><!-- /.news-ttl -->
          <?php
          if (have_posts()):
            while ( have_posts()) : the_post();
            ?>
          <div class="news-single-wrapper wow fadeInUp">
            <div class="news-single-pic wow fadeInUp">
            <?php
            if ( has_post_thumbnail( $id )){
              echo get_the_post_thumbnail ( $id, 'large' );
            } else {
              echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
            }
            ?>
            </div><!-- /.news-single-pic -->
          </div><!-- /.news-single-wrapper -->
          <div class="news-single-heading">
            <time class="news-single-time" ><?php the_time('Y.m.d' ); ?></time>
            <p class="news-single-heading-ttl"><?php the_title(); ?></p>
          </div><!-- /.news-single-heading -->
          <div class="news-single-body">
            <?php the_content(); ?>
          </div><!-- /.news-single-body -->
          
          <div class="link-page wow fadeInUp">
            <?php
            $next_post = get_next_post();
            $prev_post = get_previous_post();
            if ( $next_post ):
              ?>
            <div class="previous-page"><a href="
            <?php echo get_permalink( $next_post -> ID );?>
            " class="link-circle-previous"><i class="fas fa-chevron-left"></i></a>
              <div class="link-text-wrap">
                <p class="link-date"><?php the_time('Y.m.d' ); ?></p><!-- /.link-date -->
                <p class="link-ttl">
                <?php echo get_the_title( $next_post->ID ); ?>
                </p><!-- /.link-ttl -->
              </div><!-- /.link-text-wrap -->
            </div><!-- /.link-page -->
            <?php endif;
            if ($prev_post ):
              ?>
            <div class="next-page">
              <div class="link-text-wrap">
                <p class="link-date"><?php the_time('Y.m.d' ); ?></p><!-- /.link-date -->
                <p class="link-ttl">
                <?php echo get_the_title( $prev_post->ID ); ?>
                </p><!-- /.link-ttl -->
              </div><!-- /.link-text-wrap -->
              <a href="
            <?php echo get_permalink( $prev_post -> ID );?>
            " class="link-circle-next"><i class="fas fa-chevron-right"></i></a>
          </div><!-- /.next-page -->
        </div><!-- /.previous-page -->
        <?php endif; ?>

          <?php
          endwhile;
        endif;
        ?>
        </div><!-- /.news-inner -->
      </section>
      <!-- /.news -->

      <?php get_template_part('template-parts/schedule'); ?>
    
      <?php get_footer(); ?>
