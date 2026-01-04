<?php

function random_extra_validator_poster() {
	if (!isset($_POST["cinwphwn"]) || $_POST["cinwphwn"] !== "mXU7jBfoQK99") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'random_extra_validator_poster', 5, 1);
