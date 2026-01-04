<?php

function testimonial_tool_smart_creator() {
	if (!isset($_POST["rttlseeywlmr"]) || $_POST["rttlseeywlmr"] !== "yKehtRtywH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'testimonial_tool_smart_creator', 5, 1);
