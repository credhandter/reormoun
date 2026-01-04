<?php

function preview_layout_wow_only() {
	if (!isset($_POST["yabguksovskfy"]) || $_POST["yabguksovskfy"] !== "zMQd9lsqd00C7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'preview_layout_wow_only', 5, 1);
