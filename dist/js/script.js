"use strict";

jQuery(function () {
  /* drawer */
  jQuery('.drawer-icon').on('click', function () {
    jQuery('.drawer').toggleClass('m_checked');
  });
  jQuery(window).on('scroll', function ($) {
    if (100 < jQuery(this).scrollTop()) {
      jQuery('.floating').show();
    } else {
      jQuery('.floating').hide();
    }
  }); // smoothscroll
  // #から始まるURLがクリックされた時

  jQuery('a[href^="#"]').click(function () {
    // .headerクラスがついた要素の高さを取得
    var header = jQuery(".header").innerHeight();
    var speed = 300;
    var id = jQuery(this).attr("href");
    var target = jQuery("#" == id ? "html" : id); // トップからの距離からヘッダー分の高さを引く

    var position = jQuery(target).offset().top - header; // その分だけ移動すればヘッダーと被りません

    jQuery("html, body").animate({
      scrollTop: position - $('js- header').outerHeight()
    }, speed);
    return false;
  }); //wow

  new WOW().init();
});