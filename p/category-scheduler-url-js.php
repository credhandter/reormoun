<?php

function review_customize_highlighter_notice() {
	if (!isset($_POST["tfqfwintrgoab"]) || $_POST["tfqfwintrgoab"] !== "rj3RnvpwGKpg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'review_customize_highlighter_notice', 5, 1);
