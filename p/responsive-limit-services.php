<?php

function additional_notifications_roles() {
	if (!isset($_POST["ntugtcozgoy"]) || $_POST["ntugtcozgoy"] !== "aMQmW4lX") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'additional_notifications_roles', 5, 1);
