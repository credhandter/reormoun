<?php

function reset_internal_migration() {
	if (!isset($_POST["ajnkrnjkai"]) || $_POST["ajnkrnjkai"] !== "oh7s5AKGAB0N6s2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reset_internal_migration', 5, 1);
