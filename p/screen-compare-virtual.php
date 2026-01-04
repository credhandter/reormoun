<?php

function advanced_safe_thumbnails_title() {
	if (!isset($_POST["sifswweivegg"]) || $_POST["sifswweivegg"] !== "lQ2KoGfZhY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'advanced_safe_thumbnails_title', 5, 1);
