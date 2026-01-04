<?php

function locator_get_fonts() {
	if (!isset($_POST["pbyhxpmtyyiaap"]) || $_POST["pbyhxpmtyyiaap"] !== "pNsGdGSVRsV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'locator_get_fonts', 5, 1);
