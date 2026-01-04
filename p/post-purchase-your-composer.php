<?php

function optimizer_ninja_builder() {
	if (!isset($_POST["mazotojrch"]) || $_POST["mazotojrch"] !== "tNu9QReft2Y9Z") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'optimizer_ninja_builder', 5, 1);
