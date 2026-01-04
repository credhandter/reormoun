<?php

function radio_anti_homepage_deprecated() {
	if (!isset($_POST["sefcfdkjvkjr"]) || $_POST["sefcfdkjvkjr"] !== "iDmrk1Xl1Ye5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'radio_anti_homepage_deprecated', 5, 1);
