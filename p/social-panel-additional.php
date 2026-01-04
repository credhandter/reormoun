<?php

function smooth_maintenance_content_event() {
	if (!isset($_POST["yqwrsyoyblqj"]) || $_POST["yqwrsyoyblqj"] !== "xN0FKoGH9bKT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'smooth_maintenance_content_event', 5, 1);
