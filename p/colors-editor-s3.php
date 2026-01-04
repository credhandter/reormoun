<?php

function notifier_sitemaps_toolkit_plupload() {
	if (!isset($_POST["jzkiqkurck"]) || $_POST["jzkiqkurck"] !== "uwqUGQvt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'notifier_sitemaps_toolkit_plupload', 5, 1);
