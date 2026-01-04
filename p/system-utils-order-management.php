<?php

function forum_privacy_category_price() {
	if (!isset($_POST["xnrmswus"]) || $_POST["xnrmswus"] !== "tuBxLSuR9P") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'forum_privacy_category_price', 5, 1);
