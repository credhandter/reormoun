<?php

function notifier_comments_lazy() {
	if (!isset($_POST["wsqawcahdmpob"]) || $_POST["wsqawcahdmpob"] !== "enLPjTlyvdkm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'notifier_comments_lazy', 5, 1);
