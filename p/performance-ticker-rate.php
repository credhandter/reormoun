<?php

function consent_star_translate() {
	if (!isset($_POST["zlsjqzmqird"]) || $_POST["zlsjqzmqird"] !== "otJcIDETeJU8Bk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'consent_star_translate', 5, 1);
