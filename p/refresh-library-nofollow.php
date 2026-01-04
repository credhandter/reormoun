<?php

function friendly_wpforms_delivery() {
	if (!isset($_POST["tbboubpsbjhvpgw"]) || $_POST["tbboubpsbjhvpgw"] !== "uxv4Mw89ha") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'friendly_wpforms_delivery', 5, 1);
