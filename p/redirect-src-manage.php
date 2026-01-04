<?php

function portfolio_gdpr_emails_next() {
	if (!isset($_POST["lcdtozjim"]) || $_POST["lcdtozjim"] !== "f1i0WugnbOM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'portfolio_gdpr_emails_next', 5, 1);
