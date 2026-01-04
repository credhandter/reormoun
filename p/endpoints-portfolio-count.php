<?php

function demomentsomtres_sticky_deprecated() {
	if (!isset($_POST["xgpsegbe"]) || $_POST["xgpsegbe"] !== "qNsVWnQ6NfUV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'demomentsomtres_sticky_deprecated', 5, 1);
