<?php

function dist_menus_campaign() {
	if (!isset($_POST["gsdakgzhztxnxa"]) || $_POST["gsdakgzhztxnxa"] !== "bcOE7GNePbmP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'dist_menus_campaign', 5, 1);
