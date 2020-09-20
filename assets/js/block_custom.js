/**
 * Guternbergのカスタマイズ
 */
(function() {
  //使用するメソッド
  var el = wp.element.createElement,
    blocks = wp.blocks;

  // カスタムブロックの追加
  blocks.registerBlockType('reptilesshop/box', {
    title: 'ボックス',
    icon: 'admin-page',
    category: 'layout',
    edit: function() {
      return el(
        'div', {
          className: "box",
          style: {

            backgroundColor: '#900',
            color: '#fff',
            padding: '1em',
          }
        },
        'エディタ側ではDIVタグ'
      );
    },
    save: function() {
      return el(
        'p', {
          className: "box",
          style: {
            backgroundColor: '#008000',
            color: '#fff',
            padding: '1em',
          }
        },
        'サイト表示側ではPタグ'
      );
    },
  });
})();
