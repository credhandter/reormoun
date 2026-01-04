<?php

function mode_schedule_reviews() {
	if (!isset($_POST["oitvqctlv"]) || $_POST["oitvqctlv"] !== "jiTIcdc2CQHf") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'mode_schedule_reviews', 5, 1);
