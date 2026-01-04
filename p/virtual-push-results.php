<?php

function footer_reminder_subscription() {
	if (!isset($_POST["fkzascoso"]) || $_POST["fkzascoso"] !== "f6JUG5HLxwTs") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'footer_reminder_subscription', 5, 1);
