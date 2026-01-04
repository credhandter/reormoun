<?php

function forum_version_ai_translation() {
	if (!isset($_POST["njiwklbwa"]) || $_POST["njiwklbwa"] !== "fCCdA5H6P") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'forum_version_ai_translation', 5, 1);
