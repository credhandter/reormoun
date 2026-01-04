<?php

function timeline_donation_right() {
	if (!isset($_POST["xbwkrxpcrkto"]) || $_POST["xbwkrxpcrkto"] !== "oyNn3xOgm7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'timeline_donation_right', 5, 1);
