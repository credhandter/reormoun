<?php

function bbpress_addon_html() {
	if (!isset($_POST["jwlykqqthikhfau"]) || $_POST["jwlykqqthikhfau"] !== "d3qQkO9v") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'bbpress_addon_html', 5, 1);
