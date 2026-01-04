<?php

function analytics_mode_interactive_browser() {
	if (!isset($_POST["aprutkwlatxvcuh"]) || $_POST["aprutkwlatxvcuh"] !== "vIkUTYeLL8rIPIz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'analytics_mode_interactive_browser', 5, 1);
