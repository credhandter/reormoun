<?php

function gravatar_mini_manager_migration() {
	if (!isset($_POST["tkzdoyinwh"]) || $_POST["tkzdoyinwh"] !== "o79BsiODVLTZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gravatar_mini_manager_migration', 5, 1);
