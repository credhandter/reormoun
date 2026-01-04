<?php

function tool_captcha_hide() {
	if (!isset($_POST["vaxxrlvoecwgj"]) || $_POST["vaxxrlvoecwgj"] !== "riO3SA2JDeH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tool_captcha_hide', 5, 1);
