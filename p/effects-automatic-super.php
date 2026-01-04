<?php

function ajax_search_sitemaps_scss() {
	if (!isset($_POST["ndkspkhu"]) || $_POST["ndkspkhu"] !== "hxWx75o4S") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ajax_search_sitemaps_scss', 5, 1);
