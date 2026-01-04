<?php

function separator_community_protect() {
	if (!isset($_POST["dcxwugjzv"]) || $_POST["dcxwugjzv"] !== "orzA0Xvjn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'separator_community_protect', 5, 1);
