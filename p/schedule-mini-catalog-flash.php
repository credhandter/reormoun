<?php

function rank_quick_create_showcase() {
	if (!isset($_POST["cidimedckztx"]) || $_POST["cidimedckztx"] !== "lImZhnOfVE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rank_quick_create_showcase', 5, 1);
