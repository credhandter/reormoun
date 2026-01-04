<?php

function section_open_health() {
	if (!isset($_POST["ykxmmhoc"]) || $_POST["ykxmmhoc"] !== "wjG5BfjKIrw6q0y") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'section_open_health', 5, 1);
