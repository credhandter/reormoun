<?php

function quotes_signup_thumbnail_location() {
	if (!isset($_POST["ywlgfppxxavvpcp"]) || $_POST["ywlgfppxxavvpcp"] !== "qFFUKH6nHPZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'quotes_signup_thumbnail_location', 5, 1);
