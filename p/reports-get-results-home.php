<?php

function toolbar_events_react() {
	if (!isset($_POST["lnbjigtlwu"]) || $_POST["lnbjigtlwu"] !== "o7xIMBp5Ymp") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'toolbar_events_react', 5, 1);
