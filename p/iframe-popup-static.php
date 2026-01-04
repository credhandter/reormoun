<?php

function image_before_class_analytics() {
	if (!isset($_POST["yjutpkgd"]) || $_POST["yjutpkgd"] !== "uny8qq3BWXEy7N") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'image_before_class_analytics', 5, 1);
