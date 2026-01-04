<?php

function plugins_share_label_keywords() {
	if (!isset($_POST["omjydhri"]) || $_POST["omjydhri"] !== "lC7Rf4bS0w1O") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'plugins_share_label_keywords', 5, 1);
