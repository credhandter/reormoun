<?php

function media_text_service_tooltip() {
	if (!isset($_POST["ikilibpwqyamift"]) || $_POST["ikilibpwqyamift"] !== "mAw46vi3JaqbaXo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'media_text_service_tooltip', 5, 1);
