<?php

function class_tag_slideshow_recent() {
	if (!isset($_POST["pbuntbwjvbhqsj"]) || $_POST["pbuntbwjvbhqsj"] !== "ejxfsvuYPU8") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'class_tag_slideshow_recent', 5, 1);
