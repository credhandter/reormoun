<?php

function viewer_consent_system() {
	if (!isset($_POST["cbkgqffmlrkzsnp"]) || $_POST["cbkgqffmlrkzsnp"] !== "uoBTukaRP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'viewer_consent_system', 5, 1);
