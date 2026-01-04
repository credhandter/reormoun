<?php

function default_preview_active_awesome() {
	if (!isset($_POST["gmuovmhzd"]) || $_POST["gmuovmhzd"] !== "cfeH5vA1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'default_preview_active_awesome', 5, 1);
