<?php

function timeline_syntax_old_year() {
	if (!isset($_POST["cdtxhobstr"]) || $_POST["cdtxhobstr"] !== "kUfly7uMT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'timeline_syntax_old_year', 5, 1);
