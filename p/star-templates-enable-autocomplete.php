<?php

function web_nofollow_heading() {
	if (!isset($_POST["qapmxhno"]) || $_POST["qapmxhno"] !== "xmSRx4VCfv3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'web_nofollow_heading', 5, 1);
