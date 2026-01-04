<?php

function disable_business_lazy_daily() {
	if (!isset($_POST["uztyxrihzabuqg"]) || $_POST["uztyxrihzabuqg"] !== "jPwssZXcw2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'disable_business_lazy_daily', 5, 1);
