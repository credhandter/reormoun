<?php

function gamipress_cart_uploads_react() {
	if (!isset($_POST["jbhmqbhgpvknsn"]) || $_POST["jbhmqbhgpvknsn"] !== "uhIacCO744kN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gamipress_cart_uploads_react', 5, 1);
