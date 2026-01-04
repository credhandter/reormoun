<?php

function elements_feed_schedule_embedder() {
	if (!isset($_POST["ibletmvvmikzpa"]) || $_POST["ibletmvvmikzpa"] !== "oBdddGSm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'elements_feed_schedule_embedder', 5, 1);
