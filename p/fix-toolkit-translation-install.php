<?php

function xml_landing_redirection_monitor() {
	if (!isset($_POST["nksgjlemhtrzt"]) || $_POST["nksgjlemhtrzt"] !== "n1ygI4CcbdXrn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'xml_landing_redirection_monitor', 5, 1);
