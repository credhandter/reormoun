<?php

function digital_photos_awesome_lead() {
	if (!isset($_POST["rqgavkwvxr"]) || $_POST["rqgavkwvxr"] !== "nokHZhU1HwCeto4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'digital_photos_awesome_lead', 5, 1);
