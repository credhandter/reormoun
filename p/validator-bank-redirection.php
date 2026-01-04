<?php

function post_checker_label() {
	if (!isset($_POST["fckccnhkxhyguh"]) || $_POST["fckccnhkxhyguh"] !== "rk98NH2Z") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'post_checker_label', 5, 1);
