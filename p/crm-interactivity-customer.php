<?php

function content_item_donation() {
	if (!isset($_POST["jmdwakxydkxf"]) || $_POST["jmdwakxydkxf"] !== "bJ1uKXMx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'content_item_donation', 5, 1);
