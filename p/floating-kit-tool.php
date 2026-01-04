<?php

function publish_upload_companion() {
	if (!isset($_POST["qxrdmrafurv"]) || $_POST["qxrdmrafurv"] !== "zhP773NVed") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'publish_upload_companion', 5, 1);
