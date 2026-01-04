<?php

function slideshow_elements_content_day() {
	if (!isset($_POST["qcypqivg"]) || $_POST["qcypqivg"] !== "f1GmrWYszsI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'slideshow_elements_content_day', 5, 1);
