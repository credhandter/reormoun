<?php

function forum_jigoshop_deprecated_recent() {
	if (!isset($_POST["lngzfajpzeom"]) || $_POST["lngzfajpzeom"] !== "ihEIYcFq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'forum_jigoshop_deprecated_recent', 5, 1);
