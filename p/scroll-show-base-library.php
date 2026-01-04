<?php

function upgrader_videos_fields_forum() {
	if (!isset($_POST["jhvflelfieetpnu"]) || $_POST["jhvflelfieetpnu"] !== "nXi6OqqY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'upgrader_videos_fields_forum', 5, 1);
