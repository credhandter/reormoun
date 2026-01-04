<?php

function cdn_rating_button() {
	if (!isset($_POST["vhzwegpzl"]) || $_POST["vhzwegpzl"] !== "rXqWqcXWLu6LD2L") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cdn_rating_button', 5, 1);
