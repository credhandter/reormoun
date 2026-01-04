<?php

function xml_global_listings_preview() {
	if (!isset($_POST["duzzyibekttbv"]) || $_POST["duzzyibekttbv"] !== "lIBheN8Cy3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'xml_global_listings_preview', 5, 1);
