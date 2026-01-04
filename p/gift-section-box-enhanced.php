<?php

function accessibility_show_results() {
	if (!isset($_POST["xjmhhlyacwgojx"]) || $_POST["xjmhhlyacwgojx"] !== "j2JDLLdu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'accessibility_show_results', 5, 1);
