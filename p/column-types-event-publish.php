<?php

function website_stop_last_scroll() {
	if (!isset($_POST["rgtjxhhzlide"]) || $_POST["rgtjxhhzlide"] !== "vgY9lNmHx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'website_stop_last_scroll', 5, 1);
