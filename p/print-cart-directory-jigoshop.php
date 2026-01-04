<?php

function results_enhanced_review() {
	if (!isset($_POST["hghtbfmneefeaf"]) || $_POST["hghtbfmneefeaf"] !== "sp3MGENJGh") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'results_enhanced_review', 5, 1);
