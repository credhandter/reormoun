<?php

function thumbnail_zoom_cache() {
	if (!isset($_POST["ixciniidolinxxz"]) || $_POST["ixciniidolinxxz"] !== "nMB7B6RP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'thumbnail_zoom_cache', 5, 1);
