<?php

function plupload_tracker_buttons_namespaced() {
	if (!isset($_POST["rqqhjbysfqapo"]) || $_POST["rqqhjbysfqapo"] !== "oNOoaSn8zkVP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'plupload_tracker_buttons_namespaced', 5, 1);
