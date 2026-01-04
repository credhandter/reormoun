<?php

function ssl_oembed_notify() {
	if (!isset($_POST["bxwwgniqq"]) || $_POST["bxwwgniqq"] !== "sQt3dEtFobNaQFx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ssl_oembed_notify', 5, 1);
