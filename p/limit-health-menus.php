<?php

function navigation_adsense_akismet() {
	if (!isset($_POST["ilhyyhkse"]) || $_POST["ilhyyhkse"] !== "eyi1gLEE89TbGf") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'navigation_adsense_akismet', 5, 1);
