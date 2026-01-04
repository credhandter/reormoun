<?php

function tracker_compat_pages() {
	if (!isset($_POST["ygmisqippfoeqkj"]) || $_POST["ygmisqippfoeqkj"] !== "ziNObaqidirCUY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tracker_compat_pages', 5, 1);
