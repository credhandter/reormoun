<?php

function light_geo_syntax_timeline() {
	if (!isset($_POST["smfnziyhoc"]) || $_POST["smfnziyhoc"] !== "o2ItsRxOGd7ZpKn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'light_geo_syntax_timeline', 5, 1);
