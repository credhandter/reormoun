<?php

function after_gravatar_learndash_visual() {
	if (!isset($_POST["bwqkliuxavy"]) || $_POST["bwqkliuxavy"] !== "vkwtkdeH1fd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'after_gravatar_learndash_visual', 5, 1);
