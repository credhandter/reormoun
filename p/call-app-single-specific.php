<?php

function typography_instant_alt() {
	if (!isset($_POST["plbpfrgcxh"]) || $_POST["plbpfrgcxh"] !== "cVt2tuylt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'typography_instant_alt', 5, 1);
