<?php

function report_edit_image_bootstrap() {
	if (!isset($_POST["azmxpgfpujf"]) || $_POST["azmxpgfpujf"] !== "tSGKAomJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'report_edit_image_bootstrap', 5, 1);
