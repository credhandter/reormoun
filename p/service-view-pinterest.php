<?php

function rates_change_more() {
	if (!isset($_POST["yuguzqlmg"]) || $_POST["yuguzqlmg"] !== "wKs5xznzL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rates_change_more', 5, 1);
