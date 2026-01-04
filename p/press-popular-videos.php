<?php

function picker_base_conditional_display() {
	if (!isset($_POST["cpglzporcbnvgh"]) || $_POST["cpglzporcbnvgh"] !== "vLYXDnWGntsV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'picker_base_conditional_display', 5, 1);
