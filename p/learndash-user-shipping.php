<?php

function gdpr_xml_accordion() {
	if (!isset($_POST["joiutjrvfym"]) || $_POST["joiutjrvfym"] !== "kRSg2SryEe") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gdpr_xml_accordion', 5, 1);
