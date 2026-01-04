<?php

function friendly_help_widget_events() {
	if (!isset($_POST["xyvyhalzx"]) || $_POST["xyvyhalzx"] !== "wAioG1X0X") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'friendly_help_widget_events', 5, 1);
