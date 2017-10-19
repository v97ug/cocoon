
<?php //オリジナル設定ページ

// ユーザーが何か情報を POST したかどうかを確認
// POST していれば、隠しフィールドに 'Y' が設定されている
if( $_POST[HIDDEN_FIELD_NAME] == 'Y' &&
    $_FILES['settings']['name'] != '' ){
  //var_dump($_POST[OP_RESET_ALL_SETTINGS]);

  ///////////////////////////////////////
  // 設定の保存
  ///////////////////////////////////////
  //バックアップ
  require_once 'backup-posts.php';

//画面に「設定は保存されました」メッセージを表示
?>
<div class="updated">
  <p>
    <strong>
      <?php _e('設定をレストアしました。', THEME_NAME ); ?>
    </strong>
  </p>
</div>
<?php
}

///////////////////////////////////////
// 入力フォーム
///////////////////////////////////////
?>
<div class="wrap">
<h1><?php _e( 'バックアップ', THEME_NAME ) ?></h1><br>
  <!-- バックアップ -->
  <div class="backup metabox-holder">
    <?php require_once 'backup-forms.php'; ?>
  </div><!-- /.metabox-holder -->
</div>