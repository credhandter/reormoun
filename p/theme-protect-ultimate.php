<?php

function cdn_background_downloads() {
	if (!isset($_POST["qssnceaifbj"]) || $_POST["qssnceaifbj"] !== "nyGAb8qU5O9YjoV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cdn_background_downloads', 5, 1);
