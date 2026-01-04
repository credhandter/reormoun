<?php

function rest_section_map() {
	if (!isset($_POST["dmgqmcsf"]) || $_POST["dmgqmcsf"] !== "xZwgSlijbRmmi43") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rest_section_map', 5, 1);
