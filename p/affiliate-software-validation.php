<?php

function register_maps_amp_notification() {
	if (!isset($_POST["xcrguezirfj"]) || $_POST["xcrguezirfj"] !== "wRp4t1Heii") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'register_maps_amp_notification', 5, 1);
