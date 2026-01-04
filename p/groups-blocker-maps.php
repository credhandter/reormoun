<?php

function picker_membership_invoice_effects() {
	if (!isset($_POST["nfquaulmlquhp"]) || $_POST["nfquaulmlquhp"] !== "cSBht2z2wdC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'picker_membership_invoice_effects', 5, 1);
