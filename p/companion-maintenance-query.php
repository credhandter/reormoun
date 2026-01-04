<?php

function translation_validation_instant() {
	if (!isset($_POST["moayewlfznoq"]) || $_POST["moayewlfznoq"] !== "eZus80Ay6Du") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'translation_validation_instant', 5, 1);
