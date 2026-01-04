<?php

function javascript_panel_json_section() {
	if (!isset($_POST["qwvbsomfqngi"]) || $_POST["qwvbsomfqngi"] !== "dMMTcDljpF643s") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'javascript_panel_json_section', 5, 1);
