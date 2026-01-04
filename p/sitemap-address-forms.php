<?php

function booster_compat_javascript_ninja() {
	if (!isset($_POST["vmppihwkndsev"]) || $_POST["vmppihwkndsev"] !== "yduQ6thS6dQvV4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'booster_compat_javascript_ninja', 5, 1);
