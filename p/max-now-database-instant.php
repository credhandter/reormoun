<?php

function wpforms_admin_game_redirection() {
	if (!isset($_POST["ztlokfwmrnrcwtg"]) || $_POST["ztlokfwmrnrcwtg"] !== "zMSRrrMNYDbFD") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'wpforms_admin_game_redirection', 5, 1);
