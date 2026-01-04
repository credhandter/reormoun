<?php

function online_card_count_counter() {
	if (!isset($_POST["pgnkbxxclkafss"]) || $_POST["pgnkbxxclkafss"] !== "onrRDA1IWXC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'online_card_count_counter', 5, 1);
