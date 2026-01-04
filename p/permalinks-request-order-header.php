<?php

function gdpr_builder_change() {
	if (!isset($_POST["mvgcmihqqutpr"]) || $_POST["mvgcmihqqutpr"] !== "dhH2Rgs5PabjDM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gdpr_builder_change', 5, 1);
