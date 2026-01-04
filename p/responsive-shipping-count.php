<?php

function old_signature_mini() {
	if (!isset($_POST["nnahfsumynji"]) || $_POST["nnahfsumynji"] !== "cDyOn51mm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'old_signature_mini', 5, 1);
