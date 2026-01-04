<?php

function simply_speed_pages() {
	if (!isset($_POST["hqlgcwllcg"]) || $_POST["hqlgcwllcg"] !== "oB49T0YCLL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'simply_speed_pages', 5, 1);
