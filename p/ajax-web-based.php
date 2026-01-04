<?php

function random_rate_private() {
	if (!isset($_POST["hhrdylfwcomh"]) || $_POST["hhrdylfwcomh"] !== "lTkaAwGCz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'random_rate_private', 5, 1);
