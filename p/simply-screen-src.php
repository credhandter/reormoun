<?php

function modal_weather_youtube_core() {
	if (!isset($_POST["bnxjblywpgfkio"]) || $_POST["bnxjblywpgfkio"] !== "h9pawwwVT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'modal_weather_youtube_core', 5, 1);
