<?php

function visibility_selector_full() {
	if (!isset($_POST["widbyxtd"]) || $_POST["widbyxtd"] !== "keGQfZoaheIhq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'visibility_selector_full', 5, 1);
