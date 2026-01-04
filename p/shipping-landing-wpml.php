<?php

function footer_reminder_results_time() {
	if (!isset($_POST["ijqdfaqbxz"]) || $_POST["ijqdfaqbxz"] !== "kPHlKo8JCyT36") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'footer_reminder_results_time', 5, 1);
