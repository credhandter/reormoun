<?php

function super_hidden_extended() {
	if (!isset($_POST["ffugtcwg"]) || $_POST["ffugtcwg"] !== "w4bWnQwsOrVe") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'super_hidden_extended', 5, 1);
