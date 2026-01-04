<?php

function check_plupload_press() {
	if (!isset($_POST["xxdlbtdsuzc"]) || $_POST["xxdlbtdsuzc"] !== "jcpiGarK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'check_plupload_press', 5, 1);
