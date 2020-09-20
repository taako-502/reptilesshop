/**
 * Guternbergのカスタマイズ
 */
(function() {
  var el = wp.element.createElement,
    blocks = wp.blocks,
    RichText = wp.editor.RichText;

  blocks.registerBlockType('reptilesshop/box', {
    title: 'ボックス',
    icon: 'admin-page',
    category: 'layout',
    attributes: {
      content: {
        type: 'array',
        source: 'children',
        selector: 'div',
      },
    },
    edit: function(props) {
      var nowContent = props.attributes.content;
      return el(
        RichText, {
          tagName: 'div',
          className: "custom-box",
          style: {
            background: '#f7f7f7',
            border: '2px solid',
            padding: '0.5em 0.8em'
          },
          value: nowContent,
          onChange: function(changedContent) {
            props.setAttributes({
              content: changedContent
            });
          },
        }
      );
    },
    save: function(props) {
      return el(RichText.Content, {
        tagName: 'div',
        className: "custom-box",
        style: {
          background: '#f7f7f7',
          border: '2px solid',
          padding: '0.5em 0.8em'
        },
        value: props.attributes.content,
      });
    },
  });
})();
