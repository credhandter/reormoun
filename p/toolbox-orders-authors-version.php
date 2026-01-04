<?php

function anywhere_listing_effect_genesis() {
	if (!isset($_POST["runlopcupdi"]) || $_POST["runlopcupdi"] !== "diMrR6vPbI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'anywhere_listing_effect_genesis', 5, 1);
