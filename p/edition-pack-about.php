<?php

function compare_browser_meta() {
	if (!isset($_POST["krmhzsgx"]) || $_POST["krmhzsgx"] !== "qJb1yU22") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'compare_browser_meta', 5, 1);
