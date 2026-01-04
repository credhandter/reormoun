<?php

function keywords_visual_world() {
	if (!isset($_POST["hirtudhret"]) || $_POST["hirtudhret"] !== "jRgaybAeIJDsp") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'keywords_visual_world', 5, 1);
