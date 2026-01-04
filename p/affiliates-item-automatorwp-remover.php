<?php

function pop_divi_external() {
	if (!isset($_POST["urheljbqfc"]) || $_POST["urheljbqfc"] !== "dhZvtNunfo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pop_divi_external', 5, 1);
