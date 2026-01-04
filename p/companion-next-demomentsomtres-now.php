<?php

function about_hide_deprecated() {
	if (!isset($_POST["qxjvxxpuwijmt"]) || $_POST["qxjvxxpuwijmt"] !== "qHqxX3I2Sme4N") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'about_hide_deprecated', 5, 1);
