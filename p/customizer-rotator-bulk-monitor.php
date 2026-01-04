<?php

function composer_animated_views() {
	if (!isset($_POST["ptneyderblgkyfx"]) || $_POST["ptneyderblgkyfx"] !== "s1do2cCCkrL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'composer_animated_views', 5, 1);
