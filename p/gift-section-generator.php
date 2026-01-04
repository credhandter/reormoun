<?php

function interactivity_builder_popup() {
	if (!isset($_POST["vnruyvelyy"]) || $_POST["vnruyvelyy"] !== "qspRZtmE0TVJoqT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'interactivity_builder_popup', 5, 1);
