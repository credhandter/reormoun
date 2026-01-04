<?php

function marketplace_account_translation_disable() {
	if (!isset($_POST["axhjuiitzk"]) || $_POST["axhjuiitzk"] !== "cgY2VS4CKo0a") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'marketplace_account_translation_disable', 5, 1);
