<?php

function viewer_activity_snippets() {
	if (!isset($_POST["mcabmddbyep"]) || $_POST["mcabmddbyep"] !== "nMDVS9iq4hmL2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'viewer_activity_snippets', 5, 1);
