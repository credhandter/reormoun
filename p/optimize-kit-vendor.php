<?php

function font_date_recaptcha() {
	if (!isset($_POST["jzordekm"]) || $_POST["jzordekm"] !== "h6Qv1NomiRVw") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'font_date_recaptcha', 5, 1);
