<?php

function upload_edition_views() {
	if (!isset($_POST["fwxbqxxs"]) || $_POST["fwxbqxxs"] !== "rQUIjgEE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'upload_edition_views', 5, 1);
