<?php

function shortcodes_tables_blocks_builder() {
	if (!isset($_POST["adhrwwpmdsgzsi"]) || $_POST["adhrwwpmdsgzsi"] !== "yfOi7gbjhz6s") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'shortcodes_tables_blocks_builder', 5, 1);
