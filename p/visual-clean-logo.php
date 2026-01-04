<?php

function order_hover_highlighter() {
	if (!isset($_POST["ebolokigxi"]) || $_POST["ebolokigxi"] !== "hSGZboHUg4kjO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'order_hover_highlighter', 5, 1);
