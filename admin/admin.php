<?php
//wp_optionsテーブルから設定値を取得
$analytics = get_option('analytics','');
//saveボタンを押したときの処理
if(isset($_POST['save'])) {
  //admin.php画面からpostされたデータを更新
  $analytics = updaeteOptionPost('analytics',$_POST['analytics']);
  echo "データを更新しました。";
}
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/admin.css">
<div class="main">
  <h1>mythemeカスタマイズ画面</h1>
  <h2>画面説明</h2>
  <p>この画面は、簡単にmythemeのデザインを設定できる画面です。</p>
  <form method="post">
    <div class="setting">
      <h2>アナリティクス</h2>
      <label for="analytics">トラッキングコード：</label><input id="analytics" type="text" name="analytics" value="<?php echo $analytics ?>">
    </div>
    <p><input type="submit" name="save" value="<?php echo esc_attr( __('save','default')); ?>" class="button button-primary"></p>
  </form>
</div>
<?php
/* プライベートメソッド */
/**
 * wp_optionsテーブルの設定値を更新
 * @param  [type] $key       キー
 * @param  [type] $value     値
 * @return [type]            更新値
 */
function updaeteOptionPost($key,$value){
  $data = isset( $value ) && $value ? $value : '';
  update_option($key,$data);
  return $value;
}
?>
