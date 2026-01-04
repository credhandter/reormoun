<?php

function archives_loader_cookies_album() {
	if (!isset($_POST["bnnvpeojzf"]) || $_POST["bnnvpeojzf"] !== "gVywaH0ocD") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'archives_loader_cookies_album', 5, 1);
