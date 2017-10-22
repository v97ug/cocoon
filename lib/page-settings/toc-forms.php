<div class="metabox-holder">

<!-- 目次 -->
<div id="toc" class="postbox">
  <h2 class="hndle"><?php _e( 'リスト設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( 'リスト表示の設定です。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>
        <!-- プレビュー画面 -->
        <tr>
          <th scope="row">
            <label><?php _e( 'プレビュー', THEME_NAME ) ?></label>
          </th>
          <td>
            <div class="demo" style="height: 300px;overflow: auto;">
              <?php query_posts(''); ?>
              <?php //echo add_toc_before_1st_h2(get_latest_posts(1)->post_content); ?>
            </div>
          </td>
        </tr>

        <!-- 目次の表示 -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_TOC_VISIBLE, __('目次の表示', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            genelate_checkbox_tag(OP_TOC_VISIBLE , is_toc_visible(), __( '目次を表示する', THEME_NAME ));
            genelate_tips_tag(__( '投稿・固定ページの内容から目次を自動付加します。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 目次タイトル -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_TOC_TITLE, __('目次タイトル', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            genelate_textbox_tag(OP_TOC_TITLE, get_toc_title(), __( '目次', THEME_NAME ));
            genelate_tips_tag(__( '目次の上にラベル表示されるタイトルを入力してください。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 目次表示の深さ -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_TOC_DEPTH, __('目次表示の深さ', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            $options = array(
              '2' => __( 'H2見出しまで', THEME_NAME ),
              '3' => __( 'H3見出しまで', THEME_NAME ),
              '4' => __( 'H4見出しまで', THEME_NAME ),
              '5' => __( 'H5見出しまで', THEME_NAME ),
              '0' => __( 'H6見出しまで（デフォルト）', THEME_NAME ),
            );
            genelate_selectbox_tag(OP_TOC_DEPTH, $options, get_toc_depth());
            genelate_tips_tag(__( 'どの見出しの深さまで表示するかを設定します。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 目次ナンバーの表示 -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_TOC_NUMBER_TYPE, __('目次ナンバーの表示', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            $options = array(
              'none' => __( '表示しない', THEME_NAME ),
              'number' => __( '数字（デフォルト）', THEME_NAME ),
              'number_detail' => __( '数字詳細（ex: 1.2.3）', THEME_NAME ),
            );
            genelate_selectbox_tag(OP_TOC_NUMBER_TYPE, $options, get_toc_number_type());
            genelate_tips_tag(__( '設定項目手前の数字の表示形式を設定します。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 目次の表示順 -->
        <tr>
          <th scope="row">
            <?php genelate_label_tag(OP_TOC_BEFORE_ADS, __('目次の表示順', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            genelate_checkbox_tag(OP_TOC_BEFORE_ADS , is_toc_before_ads(), __( '広告の手前に目次を表示する', THEME_NAME ));
            genelate_tips_tag(__( '広告やウィジェットの手前に目次を表示します。※最初のH2見出し手前に表示されているとき', THEME_NAME ));
            ?>
          </td>
        </tr>


      </tbody>
    </table>

  </div>
</div>

</div><!-- /.metabox-holder -->