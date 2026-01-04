<?php

function tracking_controller_anti_extra() {
	if (!isset($_POST["zmsuprqpskoq"]) || $_POST["zmsuprqpskoq"] !== "eqdEDTbMgxn5wT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tracking_controller_anti_extra', 5, 1);
