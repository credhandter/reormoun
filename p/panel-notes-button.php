<?php

function member_modal_privacy_signup() {
	if (!isset($_POST["icmqefcvy"]) || $_POST["icmqefcvy"] !== "kEuDmPf3pQxKljE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'member_modal_privacy_signup', 5, 1);
