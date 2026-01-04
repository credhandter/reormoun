<?php

function new_calendar_appointment() {
	if (!isset($_POST["mxwgujawp"]) || $_POST["mxwgujawp"] !== "hfBMEDBMpo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'new_calendar_appointment', 5, 1);
