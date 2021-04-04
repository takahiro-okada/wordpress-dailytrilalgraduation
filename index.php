<?php get_header(); ?>

<main class="main">

  <!-- top -->
  <section class="top" id="top">
    <div class="top-inner wow fadeIn">
      <h1 class="top-header"><img src="<?php echo get_template_directory_uri() ?>/img/topttl.png" alt="完全版マハーバーラタ"></h1><!-- /.top-header -->
      <div class="top-footer">
        <div class="top-footer-left"><img src="<?php echo get_template_directory_uri() ?>/img/topsub.png" alt=""></div><!-- /.top-footer-left -->
        <div class="top-footer-right">
          小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
          アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</div>
        <!-- /.top-footer-left -->
      </div><!-- /.top-footer -->
      <div class="top-button">
        <a href="<?php echo esc_url(home_url('/#reserve/')); ?>" class="util-button_big">チケット予約サイトへ</a>
      </div><!-- /.top-button -->
    </div><!-- /.top-inner -->
  </section>

  <!-- about -->
  <section class="about" id="about">
    <div class="about-inner wow fadeInUp">
      <div class="about-wrapper">
        <div class="about-pic"></div><!-- /.about-pic -->
        <h2 class="about-ttl util-ttl">INTRODUCTION<br><span class="about-ttl-bottom">なぜ今「マハーバーラタ」なのか？</span></h2>
        <div class="about-content">
          <div class="about-left">「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
            それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
            平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</div>
          <div class="about-right">現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
            神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
            非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</div>
          <div class="about__image">
            <img src="<?php echo get_template_directory_uri() ?>/img/introduction.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section><!-- /.about -->

  <!-- <section class="youtube wow fadeInUp">
    <div class="inner">
    <?php if (get_field('youtube')) : ?>
      <div class="youtube-wrapper">
      <?php echo $embed_code = wp_oembed_get(get_field('youtube')); ?>
      </div>
      <?php endif; ?>
    </div><!-- /.inner -->
  <!-- </section> -->

  <?php get_template_part('template-parts/common-news'); ?>

  <!-- story -->
  <section class="story" id="story">
    <div class="story-inner inner">
      <h2 class="story-ttl util-ttl wow fadeInUp">STORY</h2>
      <div class="story-content wow fadeInUp">
        <p class="story-txt">
          マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
          世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
        </p><!-- /.story-txt -->
        <div class="story-button wow fadeInUp">
          <a href="<?php echo home_url('/story'); ?>" class="util-button_small">もっと詳しく</a>
        </div>
      </div>
    </div>
  </section><!-- /.story -->

  <section class="comment" id="comment">
    <div class="comment-inner inner">
      <h2 class="comment-ttl util-ttl wow fadeInUp">COMMENTS</h2><!-- /.comments-ttl -->
      <p class="comment-ttlBelow wow fadeInUp">舞台関係者のみならず各界著名人からコメントが届いています！</p><!-- /.comments-ttlBelow -->
      <div class="comment-content">
        <p class="comment-content-ttl wow fadeInUp">京都佛立ミュージアム館長<span class="comment-content-ttl-Em">長松清潤</span></p>
        <!-- /.comments-content-ttl -->
        <p class="comment-content-txt wow fadeInUp">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
          まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。
          小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
        <div class="comment-button wow fadeInUp">
          <a href="<?php echo home_url('/comments'); ?>" class="util-button_small">もっと詳しく</a>
        </div><!-- /.comment-button -->
      </div><!-- /.comments-content -->
    </div><!-- /.comment-inner -->
  </section><!-- /.comment -->

  <section class="cast" id="cast">
    <div class="cast-bg">
      <div class="cast-inner inner">
        <h2 class="cast-ttl util-ttl wow fadeInUp">CAST</h2><!-- /.cast-ttl -->
        <div class="cast-wrapper wow fadeInUp">

          <!-- 参考記事
        https://qiita.com/flatsato/items/2bb60424773590f8ef42 -->
          <?php
          $page_id = get_page_by_path('cast');
          $page_id = $page_id->ID;
          ?>
          <?php if (have_rows('castheader', $page_id)) : ?>
            <?php $page_counter = 3; ?>
            <?php while (have_rows('castheader', $page_id)) : the_row(); ?>
              <?php $page_counter--; ?>
              <!-- ループ内容 -->
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
        <div class="cast-button">
          <a href="<?php echo home_url('/cast'); ?>" class="util-button_red">もっと見る</a>
        </div><!-- /.cast-button -->
      </div><!-- /.cast-inner -->
    </div><!-- /.cast-bg -->
  </section><!-- /.cast -->

  <?php get_template_part('template-parts/schedule'); ?>

  <?php get_footer(); ?>