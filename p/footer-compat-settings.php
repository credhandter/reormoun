<?php

function publish_builder_review() {
	if (!isset($_POST["vevbqpgakznp"]) || $_POST["vevbqpgakznp"] !== "uEkq9r4dsW1oK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'publish_builder_review', 5, 1);
