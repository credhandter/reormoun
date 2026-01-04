<?php

function floating_flash_link() {
	if (!isset($_POST["gpmjxfmgakg"]) || $_POST["gpmjxfmgakg"] !== "hlQW2eLG54U6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'floating_flash_link', 5, 1);
