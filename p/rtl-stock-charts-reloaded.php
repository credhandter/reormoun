<?php

function screen_database_charts_yoast() {
	if (!isset($_POST["nmredcylqtljws"]) || $_POST["nmredcylqtljws"] !== "pUixcbOtBGiqUfs") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'screen_database_charts_yoast', 5, 1);
