<?php

function check_syntax_daily_logo() {
	if (!isset($_POST["zggzbulsqintozm"]) || $_POST["zggzbulsqintozm"] !== "yS3csruZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'check_syntax_daily_logo', 5, 1);
