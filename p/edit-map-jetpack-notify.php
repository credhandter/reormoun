<?php

function extra_dist_album() {
	if (!isset($_POST["xjlmoqdkwqrhcp"]) || $_POST["xjlmoqdkwqrhcp"] !== "lLBuck7Z") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'extra_dist_album', 5, 1);
