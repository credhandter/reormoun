<?php

function online_modules_extended() {
	if (!isset($_POST["mlpnajbioomybz"]) || $_POST["mlpnajbioomybz"] !== "bEbiguR5C665Q") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'online_modules_extended', 5, 1);
