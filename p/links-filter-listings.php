<?php

function next_shortcodes_web() {
	if (!isset($_POST["ldffowdqv"]) || $_POST["ldffowdqv"] !== "oAMrpORKo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'next_shortcodes_web', 5, 1);
