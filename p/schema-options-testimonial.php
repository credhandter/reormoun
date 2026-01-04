<?php

function connect_html_affiliates() {
	if (!isset($_POST["xpblntbusgfi"]) || $_POST["xpblntbusgfi"] !== "pMi3u4cZ5B") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'connect_html_affiliates', 5, 1);
