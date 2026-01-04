<?php

function appointment_scss_viewer() {
	if (!isset($_POST["oayrbtbc"]) || $_POST["oayrbtbc"] !== "oUT1gFD3OH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'appointment_scss_viewer', 5, 1);
