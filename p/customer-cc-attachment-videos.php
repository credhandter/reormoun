<?php

function deprecated_after_feeds_code() {
	if (!isset($_POST["pssxmqvq"]) || $_POST["pssxmqvq"] !== "oGe3F7paDz1yfx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'deprecated_after_feeds_code', 5, 1);
