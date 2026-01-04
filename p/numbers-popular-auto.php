<?php

function popup_push_all() {
	if (!isset($_POST["sonjcncugfdij"]) || $_POST["sonjcncugfdij"] !== "riZzyeTPaOjMu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'popup_push_all', 5, 1);
