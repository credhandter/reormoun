<?php

function wall_columns_effect_checkout() {
	if (!isset($_POST["shdlbrqm"]) || $_POST["shdlbrqm"] !== "y0fMnceBSIRsEf1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'wall_columns_effect_checkout', 5, 1);
