<?php

function safe_dev_redirection() {
	if (!isset($_POST["ldgssgqlmystq"]) || $_POST["ldgssgqlmystq"] !== "hwnDvt1mg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'safe_dev_redirection', 5, 1);
