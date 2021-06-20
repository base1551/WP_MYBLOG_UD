<?php
//サポートする項目を追加(post-thumbnails(アイキャッチ))
add_action('init', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	// メニューをサポート
	register_nav_menus([
		'global_nav' => 'グローバルナビゲーション',
	]);
});

/* アイキャッチ画像がなければ標準画像を表示*/
function get_eyecatch_with_default()
{

	if (has_post_thumbnail()) :
		$id  = get_post_thumbnail_id();
		$img = wp_get_attachment_image_src($id, 'large');
	else :
		$img = array(get_template_directory_uri() . '/img/post-bg.jpg');
	endif;

	return $img;
}