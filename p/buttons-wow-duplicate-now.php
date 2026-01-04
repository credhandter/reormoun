<?php

function layout_automatic_quiz() {
	if (!isset($_POST["hqwxwfyodhc"]) || $_POST["hqwxwfyodhc"] !== "pCPtLxFHyx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'layout_automatic_quiz', 5, 1);
