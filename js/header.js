/**
 * headerのjavascriptの設定
 */
( function() {
　jQuery('.menu-toggle').click(function() {
    jQuery(this).toggleClass('active');
    jQuery('.main-menu').toggleClass('open');
  });
}() );
