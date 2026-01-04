<?php

function social_search_gravity_cart() {
	if (!isset($_POST["smthxbstes"]) || $_POST["smthxbstes"] !== "czB0Evc59s") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'social_search_gravity_cart', 5, 1);
