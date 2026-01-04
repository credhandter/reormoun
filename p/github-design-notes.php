<?php

function project_conversion_search() {
	if (!isset($_POST["bvgzqvjfwg"]) || $_POST["bvgzqvjfwg"] !== "rBlTgVFBrYVJrXt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'project_conversion_search', 5, 1);
